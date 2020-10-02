<?php

namespace Bloock\Config\Service;

use Bloock\Config\Entity\Configuration;
use Bloock\Config\Entity\Network;
use Bloock\Config\Entity\NetworkConfiguration;

interface IConfigService
{
    public function getConfiguration(): Configuration;
    public function getApiBaseUrl(): string;
    public function setApiHost(string $host): void;
    public function getNetworkConfiguration(string $network): NetworkConfiguration;
    public function setNetworkConfiguration(string $network, NetworkConfiguration $config): void;
}
