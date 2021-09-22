<?php

namespace Bloock\Proof\Service;

use Bloock\Proof\Entity\Proof;

interface IProofService
{
    public function retrieveProof(array $records): Proof;
    public function verifyRecords(array $records, string $network): int;
    public function verifyProof(Proof $proof, string $network): int;
}
