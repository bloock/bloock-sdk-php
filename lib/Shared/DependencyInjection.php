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
    private static $httpClient;
    private static $blockchainClient;

    private static $configData;
    private static $configRepository;
    private static $configService;

    private static $anchorRepository;
    private static $anchorService;

    private static $recordRepository;
    private static $recordService;

    private static $proofRepository;
    private static $proofService;

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

    public static function getHttpClient(): HttpClient
    {
        return DependencyInjection::$httpClient;
    }

    public static function getBlockchainClient(): Blockchain
    {
        return DependencyInjection::$blockchainClient;
    }

    public static function getConfigData(): ConfigData
    {
        return DependencyInjection::$configData;
    }

    public static function getConfigRepository(): ConfigRepository
    {
        return DependencyInjection::$configRepository;
    }

    public static function getConfigService(): ConfigService
    {
        return DependencyInjection::$configService;
    }

    public static function getAnchorRepository(): AnchorRepository
    {
        return DependencyInjection::$anchorRepository;
    }

    public static function getAnchorService(): AnchorService
    {
        return DependencyInjection::$anchorService;
    }

    public static function getRecordRepository(): RecordRepository
    {
        return DependencyInjection::$recordRepository;
    }

    public static function getRecordService(): RecordService
    {
        return DependencyInjection::$recordService;
    }

    public static function getProofRepository(): ProofRepository
    {
        return DependencyInjection::$proofRepository;
    }

    public static function getProofService(): ProofService
    {
        return DependencyInjection::$proofService;
    }
}

DependencyInjection::setUp();
