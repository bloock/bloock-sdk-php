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
    private HttpClient $httpClient;
    private IConfigService $configService;

    public function __construct(HttpClient $httpClient, IConfigService $configService)
    {
        $this->httpClient = $httpClient;
        $this->configService = $configService;
    }

    public function getAnchor(int $anchor): AnchorRetrieveResponse
    {
        $url = $this->configService->getApiBaseUrl() . "/core/anchor/" . $anchor;
        return new AnchorRetrieveResponse($this->httpClient->get($url));
    }
}
