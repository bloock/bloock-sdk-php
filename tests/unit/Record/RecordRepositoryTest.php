<?php


namespace Bloock\Tests;

use Bloock\Record\Repository\RecordRepository;
use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\HttpClient;
use Bloock\Record\Repository\IRecordRepository;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class RecordRepositoryTest extends TestCase
{

    private $configServiceMock;
    private $httpClientMock;
    private $recordRepository;

    protected function setUp(): void
    {

        $this->configServiceMock = $this->createMock(IConfigService::class);
        $this->httpClientMock = $this->createMock(HttpClient::class);

        $this->recordRepository = new RecordRepository($this->httpClientMock, $this->configServiceMock);
    }
    /**
     * @group unit
     */
    public function test_send_records_okay()
    {
        $this->httpClientMock->method('post')
            ->willReturn(array(
                'anchor' => 80,
                'client' => "ce10c769-022b-405e-8e7c-3b52eeb2a4ea",
                'messages' => array('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5'),
                'status' => 'Pending'
            ));

        $this->configServiceMock->method('getApiBaseUrl')
            ->willReturn('api url');

        $response = $this->recordRepository->sendRecords(array());
        $this->assertEquals(80, $response->anchor);
        $this->assertEquals("ce10c769-022b-405e-8e7c-3b52eeb2a4ea", $response->client);
        $this->assertEquals(array('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5'), $response->messages);
        $this->assertEquals('Pending', $response->status);
    }

    /**
     * @group unit
     */
    public function test_send_records_okay_but_empty_fields()
    {
        $this->httpClientMock->method('post')
            ->willReturn(array());

        $this->configServiceMock->method('getApiBaseUrl')
            ->willReturn('api url');

        $response = $this->recordRepository->sendRecords(array());
        $this->assertEquals(0, $response->anchor);
        $this->assertEquals("", $response->client);
        $this->assertEquals(array(), $response->messages);
        $this->assertEquals('Pending', $response->status);
    }

    /**
     * @group unit
     */
    public function test_fetch_records_okay()
    {
        $this->httpClientMock->method('post')
            ->willReturn(array(array(
                'anchor' => 80,
                'client' => "ce10c769-022b-405e-8e7c-3b52eeb2a4ea",
                'message' => '02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5',
                'status' => 'Pending'
            )));

        $this->configServiceMock->method('getApiBaseUrl')
            ->willReturn('api url');

        $response = $this->recordRepository->fetchRecords(array());
        $this->assertEquals(80, $response[0]->anchor);
        $this->assertEquals("ce10c769-022b-405e-8e7c-3b52eeb2a4ea", $response[0]->client);
        $this->assertEquals('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5', $response[0]->message);
        $this->assertEquals('Pending', $response[0]->status);
    }

    /**
     * @group unit
     */
    public function test_fetch_records_okay_but_empty_fields()
    {
        $this->httpClientMock->method('post')
            ->willReturn(array(array()));

        $this->configServiceMock->method('getApiBaseUrl')
            ->willReturn('api url');

        $response = $this->recordRepository->fetchRecords(array());
        $this->assertEquals(0, $response[0]->anchor);
        $this->assertEquals("", $response[0]->client);
        $this->assertEquals("", $response[0]->message);
        $this->assertEquals('Pending', $response[0]->status);
    }
}
