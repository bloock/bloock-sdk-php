<?php


namespace Bloock\Tests;

use Bloock\Record\Service\IRecordService;
use Bloock\Record\Service\RecordService;
use Bloock\Record\Entity\Dto\RecordRetrieveResponse;
use Bloock\Record\Entity\Dto\RecordWriteResponse;
use Bloock\Record\Entity\Exception\InvalidRecordException;
use Bloock\Record\Entity\Record;
use Bloock\Record\Repository\IRecordRepository;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class RecordServiceTest extends TestCase
{

    private $recordRepositoryMock;
    private $recordService;

    protected function setUp(): void
    {
        $this->recordRepositoryMock = $this->createMock(IRecordRepository::class);

        $this->recordService = new RecordService($this->recordRepositoryMock);
    }
    /**
     * @group unit
     */
    public function test_send_records_okay()
    {
        $this->recordRepositoryMock->method('sendRecords')
            ->willReturn(new RecordWriteResponse(array(
                'anchor' => 80,
                'client' => "ce10c769-022b-405e-8e7c-3b52eeb2a4ea",
                'messages' => array('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5'),
                'status' => 'Pending'
            )));

        $response = $this->recordService->sendRecords(array(Record::fromHash('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5')));
        $this->assertEquals(80, $response[0]->anchor);
        $this->assertEquals("ce10c769-022b-405e-8e7c-3b52eeb2a4ea", $response[0]->client);
        $this->assertEquals('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5', $response[0]->record);
        $this->assertEquals('Pending', $response[0]->status);
    }
    /**
     * @group unit
     */
    public function test_send_records_some_invalid_record_error()
    {
        $this->recordRepositoryMock->method('sendRecords')
            ->willReturn(new RecordWriteResponse(array(
                'anchor' => 80,
                'client' => "ce10c769-022b-405e-8e7c-3b52eeb2a4ea",
                'messages' => array('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5', 'record2', ''),
                'status' => 'Pending'
            )));

        $this->expectException(InvalidRecordException::class);
        $this->recordService->sendRecords(array(Record::fromHash('record')));
    }
    /**
     * @group unit
     */
    public function test_get_records_okay()
    {
        $this->recordRepositoryMock->method('fetchRecords')
            ->willReturn(array(
                new RecordRetrieveResponse(array(
                    'anchor' => 80,
                    'client' => "ce10c769-022b-405e-8e7c-3b52eeb2a4ea",
                    'message' => '02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5',
                    'status' => 'Pending'
                ))
            ));

        $response = $this->recordService->getRecords(array(Record::fromString('record')));
        $this->assertEquals(80, $response[0]->anchor);
        $this->assertEquals("ce10c769-022b-405e-8e7c-3b52eeb2a4ea", $response[0]->client);
        $this->assertEquals('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5', $response[0]->record);
        $this->assertEquals('Pending', $response[0]->status);
    }
}
