<?php


namespace Bloock\Tests;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Anchor\Entity\Dto\AnchorRetrieveResponse;
use Bloock\Anchor\Entity\Exception\WaitAnchorTimeoutException;
use Bloock\Anchor\Repository\IAnchorRepository;
use Bloock\Anchor\Service\AnchorService;
use Bloock\Anchor\Service\IAnchorService;
use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\Http\Exception\HttpException;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class AnchorServiceTest extends TestCase
{
    private $counter;
    private $maxCount;

    private $configServiceMock;
    private $anchorRepositoryMock;

    private $anchorService;

    protected function setUp(): void
    {
        $this->anchorRepositoryMock = $this->createMock(IAnchorRepository::class);
        $this->configServiceMock = $this->createMock(IConfigService::class);

        $this->anchorService = new AnchorService($this->anchorRepositoryMock, $this->configServiceMock);
    }
    /**
     * @group unit
     */
    public function test_get_anchor_okay()
    {
        $this->anchorRepositoryMock->method('getAnchor')
            ->willReturn(new AnchorRetrieveResponse(array(
                'anchor_id' => 1,
                'block_roots' => ['block_root'],
                'networks' => [],
                'root' => 'root',
                'status' => 'Success'
            )));

        $response = $this->anchorService->getAnchor(1);
        $this->assertEquals(1, $response->id);
        $this->assertEquals(['block_root'], $response->blockRoots);
        $this->assertEquals([], $response->networks);
        $this->assertEquals('root', $response->root);
        $this->assertEquals("Success", $response->status);
    }
    /**
     * @group unit
     */
    public function test_wait_anchor_okay_first_try()
    {
        $this->counter = 0;
        $this->maxCount = 0;

        $this->anchorRepositoryMock->method('getAnchor')
            ->willReturnCallback([$this, 'getAnchorSideEffect']);

        $response = $this->anchorService->waitAnchor(1, 5000);
        $this->assertEquals(1, $response->id);
        $this->assertEquals(['block_root'], $response->blockRoots);
        $this->assertEquals([], $response->networks);
        $this->assertEquals('root', $response->root);
        $this->assertEquals("Success", $response->status);
    }
    /**
     * @group unit
     */
    public function test_wait_anchor_okay_after_3_retries()
    {
        $this->counter = 0;
        $this->maxCount = 3;

        $this->anchorRepositoryMock->method('getAnchor')
            ->willReturnCallback([$this, 'getAnchorSideEffect']);

        $response = $this->anchorService->waitAnchor(1, 5000);
        $this->assertEquals(1, $response->id);
        $this->assertEquals(['block_root'], $response->blockRoots);
        $this->assertEquals([], $response->networks);
        $this->assertEquals('root', $response->root);
        $this->assertEquals("Success", $response->status);
    }
    /**
     * @group unit
     */
    public function test_wait_anchor_error_timeout()
    {
        $this->counter = 0;
        $this->maxCount = 3;

        $this->anchorRepositoryMock->method('getAnchor')
            ->willReturnCallback([$this, 'getAnchorSideEffect']);

        $this->expectException(WaitAnchorTimeoutException::class);
        $this->anchorService->waitAnchor(1, 1);
    }

    public function getAnchorSideEffect($e)
    {
        if ($this->counter < $this->maxCount) {
            $this->counter += 1;
            return new AnchorRetrieveResponse(array(
                'anchor_id' => 1,
                'block_roots' => [],
                'networks' => [],
                'root' => 'root',
                'status' => 'Pending'
            ));
        }

        return new AnchorRetrieveResponse(array(
            'anchor_id' => 1,
            'block_roots' => ['block_root'],
            'networks' => [],
            'root' => 'root',
            'status' => 'Success'
        ));
    }
}
