<?php

namespace Bloock\Infrastructure\Blockchain;

use Bloock\Config\Service\ConfigService;
use Bloock\Infrastructure\Blockchain;
use Web3\Contract;

final class Web3 implements Blockchain
{
    private $configService;

    public function __construct(ConfigService $configService)
    {
        $this->configService = $configService;
    }

    public function validateRoot(string $network, string $root): int
    {
        $config = $this->getConfigService()->getNetworkConfiguration($network);

        $contract = new Contract(
            $config->HTTP_PROVIDER,
            $config->CONTRACT_ABI
        );

        $response = 0;
        $callback = function ($error, $result) use (&$response) {
            if (!empty($error) || empty($result[0])) {
                $response = 0;
                return;
            }
            $response = intval($result[0]->toString());
            return $response;
        };

        $contract->at($config->CONTRACT_ADDRESS)->call("getState", '0x' . $root, $callback);

        return $response;
    }

    private function getConfigService(): ConfigService
    {
        return $this->configService;
    }
}
