<?php

namespace Bloock\Config\Repository;

use Bloock\Config\Entity\Configuration;
use Bloock\Config\Entity\NetworkConfiguration;
use Bloock\Config\Repository\ConfigData;
use Bloock\Config\Repository\IConfigRepository;

class ConfigRepository implements IConfigRepository
{
    private ConfigData $configData;

    public function __construct(ConfigData $configData)
    {
        $this->configData = $configData;
    }

    public function getConfiguration(): Configuration
    {
        return $this->configData->getConfiguration();
    }

    public function setApiHost(string $host): void
    {
        $this->configData->setApiHost($host);
    }

    public function getNetworkConfiguration(string $network): NetworkConfiguration
    {
        return $this->configData->getNetworkConfiguration($network);
    }

    public function setNetworkConfiguration(string $network, NetworkConfiguration $config): void
    {
        $this->configData->setNetworkConfiguration($network, $config);
    }
}
