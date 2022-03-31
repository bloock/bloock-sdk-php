<?php

namespace Bloock\Record\Repository;

use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\HttpClient;
use Bloock\Record\Entity\Dto\RecordRetrieveRequest;
use Bloock\Record\Entity\Dto\RecordRetrieveResponse;
use Bloock\Record\Entity\Dto\RecordWriteRequest;
use Bloock\Record\Entity\Dto\RecordWriteResponse;
use Bloock\Record\Repository\IRecordRepository;

final class RecordRepository implements IRecordRepository
{
    private $httpClient;
    private $configService;

    public function __construct(HttpClient $httpClient, IConfigService $configService)
    {
        $this->httpClient = $httpClient;
        $this->configService = $configService;
    }

    public function sendRecords(array $records): RecordWriteResponse
    {
        $url = $this->getConfigService()->getApiBaseUrl() . "/core/messages";
        $body = new RecordWriteRequest($records);

        fwrite(STDERR, print_r($url."\n", TRUE));

        return new RecordWriteResponse($this->getHttpClient()->post($url, $body));
    }

    public function fetchRecords(array $records): array
    {
        $url = $this->getConfigService()->getApiBaseUrl() . "/core/messages/fetch";
        $body = new RecordRetrieveRequest($records);

        $response = $this->getHttpClient()->post($url, $body);

        $retrieveResponse = [];
        foreach ($response as $item) {
            array_push($retrieveResponse, new RecordRetrieveResponse($item));
        }

        return $retrieveResponse;
    }

    private function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    private function getConfigService(): IConfigService
    {
        return $this->configService;
    }
}
