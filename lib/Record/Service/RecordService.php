<?php

namespace Bloock\Record\Service;

use Bloock\Record\Entity\Dto\RecordRetrieveResponse;
use Bloock\Record\Entity\Exception\InvalidRecordException;
use Bloock\Record\Entity\Record;
use Bloock\Record\Entity\RecordReceipt;
use Bloock\Record\Repository\IRecordRepository;

final class RecordService implements IRecordService
{
    private IRecordRepository $recordRepository;

    public function __construct(IRecordRepository $recordRepository)
    {
        $this->recordRepository = $recordRepository;
    }

    public function sendRecords(array $records): array
    {
        if (count($records) == 0) {
            return [];
        }

        foreach ($records as $record) {
            if (Record::isValid($record) == false) {
                throw new InvalidRecordException();
            }
        }

        $response = $this->recordRepository->sendRecords($records);
        if ($response == null) {
            return [];
        }

        $result = [];
        foreach ($records as $record) {
            array_push($result, new RecordReceipt(
                $response->anchor,
                $response->client,
                $record->getHash(),
                $response->status
            ));
        }

        return $result;
    }

    public function getRecords(array $records): array
    {
        if (count($records) == 0) {
            return [];
        }

        foreach ($records as $record) {
            if (Record::isValid($record) == false) {
                throw new InvalidRecordException();
            }
        }

        $response = $this->recordRepository->fetchRecords($records);
        if ($response == null) {
            return [];
        }

        $result = [];
        foreach ($response as $record) {
            if ($record instanceof RecordRetrieveResponse) {
                array_push($result, new RecordReceipt(
                    $record->anchor,
                    $record->client,
                    $record->message,
                    $record->status
                ));
            }
        }

        return $result;
    }
}
