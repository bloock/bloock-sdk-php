<?php

namespace Bloock\Record\Service;

interface IRecordService
{
    public function sendRecords(array $records): array;
    public function getRecords(array $records): array;
}
