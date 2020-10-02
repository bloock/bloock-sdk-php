<?php

namespace Bloock\Shared;

use Bloock\Anchor\Repository\AnchorRepository;
use Bloock\Record\Repository\RecordRepository;
use Bloock\Anchor\Service\AnchorService;
use Bloock\Record\Service\RecordService;
use Bloock\Config\Repository\ConfigData;
use Bloock\Config\Repository\ConfigRepository;
use Bloock\Config\Service\ConfigService;
use Bloock\Infrastructure\Blockchain;
use Bloock\Infrastructure\Blockchain\Web3;
use Bloock\Infrastructure\Http\GuzzleHttp;
use Bloock\Infrastructure\HttpClient;
use Bloock\Proof\Repository\ProofRepository;
use Bloock\Proof\Service\ProofService;

class DependencyInjection
{
    public static HttpClient $httpClient;
    private static Blockchain $blockchainClient;

    private static ConfigData $configData;
    private static ConfigRepository $configRepository;
    public static ConfigService $configService;

    private static AnchorRepository $anchorRepository;
    public static AnchorService $anchorService;

    private static RecordRepository $recordRepository;
    public static RecordService $recordService;

    private static ProofRepository $proofRepository;
    public static ProofService $proofService;

    public static function setUp()
    {
        DependencyInjection::$configData = new ConfigData();
        DependencyInjection::$configRepository = new ConfigRepository(DependencyInjection::$configData);
        DependencyInjection::$configService = new ConfigService(DependencyInjection::$configRepository);

        DependencyInjection::$httpClient = new GuzzleHttp();
        DependencyInjection::$blockchainClient = new Web3(DependencyInjection::$configService);

        DependencyInjection::$anchorRepository = new AnchorRepository(DependencyInjection::$httpClient, DependencyInjection::$configService);
        DependencyInjection::$anchorService = new AnchorService(DependencyInjection::$anchorRepository, DependencyInjection::$configService);

        DependencyInjection::$recordRepository = new RecordRepository(DependencyInjection::$httpClient, DependencyInjection::$configService);
        DependencyInjection::$recordService = new RecordService(DependencyInjection::$recordRepository);

        DependencyInjection::$proofRepository = new ProofRepository(DependencyInjection::$httpClient, DependencyInjection::$blockchainClient, DependencyInjection::$configService);
        DependencyInjection::$proofService = new ProofService(DependencyInjection::$proofRepository);
    }
}

DependencyInjection::setUp();
