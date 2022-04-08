<?php

namespace Bloock\Config\Entity;

class Network
{
    public const ETHEREUM_MAINNET = "ethereum_mainnet";
    public const ETHEREUM_RINKEBY = "ethereum_rinkeby";
    public const BLOOCK_CHAIN = "bloock_chain";

    public static function SelectNetwork(string $network): string {
        switch ($network) {
            case self::BLOOCK_CHAIN:
                break;
            case self::ETHEREUM_RINKEBY:
                break;
            default:
                $network = self::ETHEREUM_MAINNET;
        }
        return $network;
    }
}
