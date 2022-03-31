<?php

namespace Bloock\Proof\Service;

use Bloock\Proof\Entity\Exception\InvalidProofException;
use Bloock\Proof\Entity\Exception\ProofNotFoundException;
use Bloock\Proof\Entity\Proof;
use Bloock\Proof\Repository\IProofRepository;
use Bloock\Record\Entity\Exception\InvalidRecordException;
use Bloock\Record\Entity\Record;
use InvalidArgumentException;

final class ProofService implements IProofService
{
    private $proofRepository;

    public function __construct(IProofRepository $proofRepository)
    {
        $this->proofRepository = $proofRepository;
    }

    public function retrieveProof(array $records): Proof
    {
        if (count($records) <= 0) {
            throw new InvalidArgumentException();
        }

        foreach ($records as $record) {
            if (Record::isValid($record) == false) {
                throw new InvalidRecordException();
            }
        }

        $sorted = Record::sort($records);

        $response =  $this->getProofRepository()->retrieveProof($sorted);

        return new Proof(
            $response->leaves,
            $response->nodes,
            $response->depth,
            $response->bitmap
        );
    }

    public function verifyRecords(array $records): Record
    {
        $proof = $this->retrieveProof($records);
        if ($proof == null) {
            throw new ProofNotFoundException();
        }

        return $this->verifyProof($proof);
    }

    public function verifyProof(Proof $proof): Record
    {
        $root = $this->getProofRepository()->verifyProof($proof);
        if ($root == null) {
            throw new InvalidProofException();
        }

        return $root;
    }

    public function validateProof(Record $root, string $network): int
    {
        return $this->getProofRepository()->validateRoot($network, $root);
    }

    private function getProofRepository(): IProofRepository
    {
        return $this->proofRepository;
    }
}
