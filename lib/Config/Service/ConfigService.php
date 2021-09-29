<?php

namespace Bloock\Config\Service;

use Bloock\Config\Entity\Configuration;
use Bloock\Config\Entity\NetworkConfiguration;
use Bloock\Config\Repository\IConfigRepository;

class ConfigService implements IConfigService
{
    private $configRepository;

    public function __construct(IConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    public function getConfiguration(): Configuration
    {
        return $this->getConfigRepository()->getConfiguration();
    }

    public function getApiBaseUrl(): string
    {
        return $this->getConfigRepository()->getConfiguration()->HOST;
    }

    public function setApiHost(string $host): void
    {
        $this->getConfigRepository()->setApiHost($host);
    }

    public function getNetworkConfiguration(string $network): NetworkConfiguration
    {
        return $this->getConfigRepository()->getNetworkConfiguration($network);
    }

    public function setNetworkConfiguration(string $network, NetworkConfiguration $config): void
    {
        $this->getConfigRepository()->setNetworkConfiguration($network, $config);
    }

    private function getConfigRepository(): IConfigRepository
    {
        return $this->configRepository;
    }
}
