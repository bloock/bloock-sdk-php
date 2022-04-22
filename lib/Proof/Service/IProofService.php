<?php

namespace Bloock\Proof\Service;

use Bloock\Proof\Entity\Proof;
use Bloock\Record\Entity\Record;

interface IProofService
{
    public function retrieveProof(array &$records): Proof;
    public function verifyRecords(array $records, string $network): int;
    public function verifyProof(Proof $proof): Record;
    public function validateRoot(Record $root, string $network): int;
}
