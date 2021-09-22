<?php

namespace Bloock\Config\Service;

use Bloock\Config\Entity\Configuration;
use Bloock\Config\Entity\NetworkConfiguration;
use Bloock\Config\Repository\IConfigRepository;

class ConfigService implements IConfigService
{
    private IConfigRepository $configRepository;

    public function __construct(IConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    public function getConfiguration(): Configuration
    {
        return $this->configRepository->getConfiguration();
    }

    public function getApiBaseUrl(): string
    {
        return $this->configRepository->getConfiguration()->HOST;
    }

    public function setApiHost(string $host): void
    {
        $this->configRepository->setApiHost($host);
    }

    public function getNetworkConfiguration(string $network): NetworkConfiguration
    {
        return $this->configRepository->getNetworkConfiguration($network);
    }

    public function setNetworkConfiguration(string $network, NetworkConfiguration $config): void
    {
        $this->configRepository->setNetworkConfiguration($network, $config);
    }
}
