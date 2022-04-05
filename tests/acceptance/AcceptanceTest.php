<?php


namespace Bloock\Tests;

use Bloock\BloockClient;
use Bloock\Config\Entity\Network;
use Bloock\Config\Entity\NetworkConfiguration;
use Bloock\Infrastructure\Http\Exception\HttpException;
use Bloock\Record\Entity\Exception\InvalidRecordException;
use Bloock\Record\Entity\Record;
use PHPUnit\Framework\TestCase;

final class AcceptanceTest extends TestCase
{
    /**
     * @group e2e
     */
    public function test_end_to_end_sdk_test()
    {
        $sdk = $this->getClient();

        $string = $this->generateRandomString();
        $records = array(Record::fromString($string));

        $sendReceipts = $sdk->sendRecords($records);
        if ($sendReceipts == null) {
            $this->fail("Failed to write message");
        }

        $sdk->waitAnchor($sendReceipts[0]->anchor, 60000);

        $proof = $sdk->getProof($records);
        $root = $sdk->verifyProof($proof);
        $timestamp = $sdk->validateProof($root, Network::BLOOCK_CHAIN);

        $this->assertTrue($timestamp > 0);
    }
    /**
     * @group e2e
     */
    public function test_send_records_invalid_record_input_wrong_char()
    {
        $sdk = $this->getClient();

        $records = [
            Record::fromHash('e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994aG')
        ];

        $this->expectException(InvalidRecordException::class);
        $sdk->sendRecords($records);
    }
    /**
     * @group e2e
     */
    public function test_send_records_invalid_record_input_missing_chars()
    {
        $sdk = $this->getClient();

        $records = [
            Record::fromHash('e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994aa'),
            Record::fromHash('e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994')
        ];

        $this->expectException(InvalidRecordException::class);
        $sdk->sendRecords($records);
    }
    /**
     * @group e2e
     */
    public function test_send_records_invalid_record_input_wrong_start()
    {
        $sdk = $this->getClient();

        $records = [
            Record::fromHash('0xe016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994aa'),
            Record::fromHash('0xe016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994bb')
        ];

        $this->expectException(InvalidRecordException::class);
        $sdk->sendRecords($records);
    }
    /**
     * @group e2e
     */
    public function test_send_records_empty_record_input()
    {
        $sdk = $this->getClient();

        $records = [];

        $this->assertEquals([], $sdk->sendRecords($records));
    }
    /**
     * @group e2e
     */
    public function test_get_records_invalid_record_input_wrong_char()
    {
        $sdk = $this->getClient();

        $records = [
            Record::fromHash('e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994aG')
        ];

        $this->expectException(InvalidRecordException::class);
        $sdk->getRecords($records);
    }
    /**
     * @group e2e
     */
    public function test_get_records_invalid_record_input_missing_chars()
    {
        $sdk = $this->getClient();

        $records = [
            Record::fromHash('e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994aa'),
            Record::fromHash('e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994')
        ];

        $this->expectException(InvalidRecordException::class);
        $sdk->getRecords($records);
    }
    /**
     * @group e2e
     */
    public function test_get_records_invalid_record_input_wrong_start()
    {
        $sdk = $this->getClient();

        $records = [
            Record::fromHash('0xe016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994aa'),
            Record::fromHash('0xe016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994bb')
        ];

        $this->expectException(InvalidRecordException::class);
        $sdk->getRecords($records);
    }
    /**
     * @group e2e
     */
    // public function test_wait_anchor_non_existing_anchor()
    // {
    //     $sdk = $this->getClient();

    //     $this->expectException(WaitAnchorTimeoutException::class);
    //     $sdk->waitAnchor(666666666666666666, 3000);
    // }
    /**
     * @group e2e
     */

    private function generateRandomString($length = 64): string
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    private function getClient(): BloockClient
    {
        $apiKey = getenv("API_KEY");
        $apiHost = getenv("API_HOST");

        $client = new BloockClient($apiKey);
        $client->setApiHost($apiHost);
        return $client;
    }
}
