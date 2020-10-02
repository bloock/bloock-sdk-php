<?php

namespace Bloock\Record\Repository;

use Bloock\Record\Entity\Dto\RecordWriteResponse;

interface IRecordRepository
{
    public function sendRecords(array $records): RecordWriteResponse;
    public function fetchRecords(array $records): array;
}
