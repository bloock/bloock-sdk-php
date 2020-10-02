<?php

namespace Bloock\Proof\Repository;

use Bloock\Proof\Entity\Dto\ProofRetrieveResponse;
use Bloock\Proof\Entity\Proof;
use Bloock\Record\Entity\Record;

interface IProofRepository
{
    public function retrieveProof(array $records): ProofRetrieveResponse;
    public function verifyProof(Proof $proof): Record;
    public function validateRoot(string $network, Record $root): int;
}
