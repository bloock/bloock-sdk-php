<?php

namespace Bloock\Config\Repository;

use Bloock\Config\Entity\Configuration;
use Bloock\Config\Entity\Network;
use Bloock\Config\Entity\NetworkConfiguration;

interface IConfigRepository
{
    public function getConfiguration(): Configuration;
    public function setApiHost(string $host): void;
    public function getNetworkConfiguration(string $network): NetworkConfiguration;
    public function setNetworkConfiguration(string $network, NetworkConfiguration $config): void;
}
