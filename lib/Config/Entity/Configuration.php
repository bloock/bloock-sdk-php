<?php

namespace Bloock\Config\Entity;

class Configuration
{
    public string $HOST = "";
    public int $WAIT_MESSAGE_INTERVAL_FACTOR = 2;
    public int $WAIT_MESSAGE_INTERVAL_DEFAULT = 1000;
}

class NetworkConfiguration
{
    public string $CONTRACT_ADDRESS = "";
    public string $CONTRACT_ABI = "";
    public string $HTTP_PROVIDER = "";

    public function __construct(string $contractAddress, string $contractAbi, string $httpProvider)
    {
        $this->CONTRACT_ADDRESS = $contractAddress;
        $this->CONTRACT_ABI = $contractAbi;
        $this->HTTP_PROVIDER = $httpProvider;
    }
}
