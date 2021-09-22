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
    private IProofRepository $proofRepository;

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

        $response =  $this->proofRepository->retrieveProof($sorted);

        return new Proof(
            $response->leaves,
            $response->nodes,
            $response->depth,
            $response->bitmap
        );
    }

    public function verifyRecords(array $records, string $network): int
    {
        $proof = $this->retrieveProof($records);
        if ($proof == null) {
            throw new ProofNotFoundException();
        }

        return $this->verifyProof($proof, $network);
    }

    public function verifyProof(Proof $proof, string $network): int
    {
        $root = $this->proofRepository->verifyProof($proof);
        if ($root == null) {
            throw new InvalidProofException();
        }

        return $this->proofRepository->validateRoot($network, $root);
    }
}
