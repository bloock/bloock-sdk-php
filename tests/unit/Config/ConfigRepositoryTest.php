<?php


namespace Bloock\Tests;

use Bloock\Config\Repository\ConfigData;
use Bloock\Config\Repository\ConfigRepository;
use Bloock\Config\Repository\IConfigRepository;
use PHPUnit\Framework\TestCase;

final class ConfigRepositoryTest extends TestCase
{

    private $configDataMock;
    private $configRepository;

    protected function setUp(): void
    {
        $this->configDataMock = new ConfigData();
        $this->configRepository = new ConfigRepository($this->configDataMock);
    }
    /**
     * @group unit
     */
    public function test_set_host()
    {
        $this->configRepository->setApiHost('https://modified.bloock.com');
        $this->assertEquals('https://modified.bloock.com', $this->configDataMock->getConfiguration()->HOST);
    }
}
