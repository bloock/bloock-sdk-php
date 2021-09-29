<?php

namespace Bloock\Config\Entity;

class Configuration
{
    public $HOST = "";
    public $WAIT_MESSAGE_INTERVAL_FACTOR = 2;
    public $WAIT_MESSAGE_INTERVAL_DEFAULT = 1000;
}

class NetworkConfiguration
{
    public $CONTRACT_ADDRESS = "";
    public $CONTRACT_ABI = "";
    public $HTTP_PROVIDER = "";

    public function __construct(string $contractAddress, string $contractAbi, string $httpProvider)
    {
        $this->CONTRACT_ADDRESS = $contractAddress;
        $this->CONTRACT_ABI = $contractAbi;
        $this->HTTP_PROVIDER = $httpProvider;
    }
}
