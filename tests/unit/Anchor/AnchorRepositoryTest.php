<?php


namespace Bloock\Tests;

use Bloock\Anchor\Repository\AnchorRepository;
use Bloock\Anchor\Repository\IAnchorRepository;
use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\HttpClient;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class AnchorRepositoryTest extends TestCase
{
    private $configServiceMock;
    private $httpClientMock;
    private $anchorRepository;

    protected function setUp(): void
    {

        $this->configServiceMock = $this->createMock(IConfigService::class);
        $this->httpClientMock = $this->createMock(HttpClient::class);

        $this->anchorRepository = new AnchorRepository($this->httpClientMock, $this->configServiceMock);
    }
    /**
     * @group unit
     */
    public function test_get_anchor_okay()
    {
        $this->httpClientMock->method('get')
            ->willReturn(array(
                'anchor_id' => 1,
                'block_roots' => ['block_root'],
                'networks' => [],
                'root' => 'root',
                'status' => 'Success'
            ));

        $this->configServiceMock->method('getApiBaseUrl')
            ->willReturn('api url');

        $response = $this->anchorRepository->getAnchor(1);
        $this->assertEquals(1, $response->anchorId);
        $this->assertEquals(['block_root'], $response->blockRoots);
        $this->assertEquals([], $response->networks);
        $this->assertEquals('root', $response->root);
        $this->assertEquals('Success', $response->status);
    }
}
