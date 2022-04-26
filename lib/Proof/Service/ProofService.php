<?php

namespace Bloock\Proof\Service;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Config\Entity\Network;
use Bloock\Proof\Entity\Exception\InvalidProofException;
use Bloock\Proof\Entity\Exception\InvalidSignatureException;
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

    public function retrieveProof(array &$records): Proof
    {
        if (count($records) <= 0) {
            throw new InvalidArgumentException();
        }

        foreach ($records as $record) {
            if (Record::isValid($record) == false) {
                throw new InvalidRecordException();
            }
        }

        if (count($records) == 1) {
            $proof = $records[0]->getProof();
            if ($proof != null) {
                return $proof;
            }
        }

        $sorted = Record::sort($records);

        $proof =  $this->getProofRepository()->retrieveProof($sorted);

        if (count($sorted) == 1) {
            $sorted[0]->setProof($proof);
        }
        return $proof;
    }

    public function verifyRecords(array $records, string $network = null): int
    {
        $verified = $this->verifySignatures($records);
        if ($verified == false) {
            throw new InvalidSignatureException();
        }

        $proof = $this->retrieveProof($records);
        if ($proof == null) {
            throw new ProofNotFoundException();
        }

        if (!isset($network)) {
            $network = Network::SelectNetwork($proof->anchor->networks);
        }

        $root = $this->verifyProof($proof);
        if ($root == null) {
            throw new InvalidProofException();
        }

        return $this->validateRoot($root, $network);
    }

    public function verifySignatures(array $records): bool
    {
        if (count($records) <= 0) {
            throw new InvalidArgumentException();
        }

        foreach ($records as $record) {
            if (Record::isValid($record) == false) {
                throw new InvalidRecordException();
            }
        }

        try {
            foreach ($records as $record) {
                if ($record->verify() == false) {
                    return false;
                }
            }
        } catch (\Throwable) {
            return false;
        }

        return true;
    }

    public function verifyProof(Proof $proof): Record
    {
        $root = $this->getProofRepository()->verifyProof($proof);
        if ($root == null) {
            throw new InvalidProofException();
        }

        return $root;
    }

    public function validateRoot(Record $root, string $network): int
    {
        return $this->getProofRepository()->validateRoot($network, $root);
    }

    private function getProofRepository(): IProofRepository
    {
        return $this->proofRepository;
    }
}
