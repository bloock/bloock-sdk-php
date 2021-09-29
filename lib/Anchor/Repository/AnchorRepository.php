<?php

namespace Bloock\Anchor\Repository;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Anchor\Entity\Dto\AnchorRetrieveResponse;
use Bloock\Anchor\Repository\IAnchorRepository;
use Bloock\Config\Service\ConfigService;
use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\HttpClient;

final class AnchorRepository implements IAnchorRepository
{
    private $httpClient;
    private $configService;

    public function __construct(HttpClient $httpClient, IConfigService $configService)
    {
        $this->httpClient = $httpClient;
        $this->configService = $configService;
    }

    public function getAnchor(int $anchor): AnchorRetrieveResponse
    {
        $url = $this->getConfigService()->getApiBaseUrl() . "/core/anchor/" . $anchor;
        return new AnchorRetrieveResponse($this->getHttpClient()->get($url));
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
