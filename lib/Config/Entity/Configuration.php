<?php

namespace Bloock\Config\Entity;

class Configuration
{
    public $HOST = "";
    public $WAIT_MESSAGE_INTERVAL_FACTOR = 2;
    public $WAIT_MESSAGE_INTERVAL_DEFAULT = 1000;
    public $KEY_TYPE_ALGORITHM = 'EC';
    public $ELLIPTIC_CURVE_KEY = 'secp256k1';
    public $SIGNATURE_ALGORITHM = 'ES256K';
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
