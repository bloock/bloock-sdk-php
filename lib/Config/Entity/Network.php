<?php

namespace Bloock\Config\Entity;

class Network
{
    public const ETHEREUM_MAINNET = "ethereum_mainnet";
    public const ETHEREUM_RINKEBY = "ethereum_rinkeby";
    public const BLOOCK_CHAIN = "bloock_chain";

    public static function SelectNetwork(array $networks): string
    {
        if (isset($networks)) {
            foreach ($networks as $network) {
                if ($network['name'] == self::ETHEREUM_MAINNET) {
                    return self::ETHEREUM_MAINNET;
                }
            }
            if (isset($networks[0]) && isset($networks[0]['name'])) {
                switch ($networks[0]['name']) {
                    case self::BLOOCK_CHAIN:
                        return self::BLOOCK_CHAIN;
                    case self::ETHEREUM_RINKEBY:
                        return self::ETHEREUM_RINKEBY;
                    default:
                        return self::ETHEREUM_MAINNET;
                }
            }
        }

        return self::ETHEREUM_MAINNET;
    }
}
