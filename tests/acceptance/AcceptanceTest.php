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
        $timestamp = $sdk->verifyProof($proof, Network::BLOOCK_CHAIN);

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
    public function test_get_anchor_non_existing_anchor()
    {
        $sdk = $this->getClient();

        $this->expectException(HttpException::class);
        $this->expectExceptionMessage("Anchor not found");
        $sdk->getAnchor(666666666666666666);
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
        $client->setNetworkConfiguration(Network::BLOOCK_CHAIN, new NetworkConfiguration(
            "0xd2d1BBcbee7741f8C846826F55b7c17fc5cf969a",
            "[{\"inputs\":[{\"internalType\":\"address\",\"name\":\"role_manager\",\"type\":\"address\"},{\"internalType\":\"address\",\"name\":\"state_manager\",\"type\":\"address\"}],\"stateMutability\":\"nonpayable\",\"type\":\"constructor\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"indexed\":true,\"internalType\":\"bytes32\",\"name\":\"previousAdminRole\",\"type\":\"bytes32\"},{\"indexed\":true,\"internalType\":\"bytes32\",\"name\":\"newAdminRole\",\"type\":\"bytes32\"}],\"name\":\"RoleAdminChanged\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"account\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"sender\",\"type\":\"address\"}],\"name\":\"RoleGranted\",\"type\":\"event\"},{\"anonymous\":false,\"inputs\":[{\"indexed\":true,\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"account\",\"type\":\"address\"},{\"indexed\":true,\"internalType\":\"address\",\"name\":\"sender\",\"type\":\"address\"}],\"name\":\"RoleRevoked\",\"type\":\"event\"},{\"inputs\":[],\"name\":\"DEFAULT_ADMIN_ROLE\",\"outputs\":[{\"internalType\":\"bytes32\",\"name\":\"\",\"type\":\"bytes32\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[],\"name\":\"STATE_MANAGER\",\"outputs\":[{\"internalType\":\"bytes32\",\"name\":\"\",\"type\":\"bytes32\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"}],\"name\":\"getRoleAdmin\",\"outputs\":[{\"internalType\":\"bytes32\",\"name\":\"\",\"type\":\"bytes32\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"state_root\",\"type\":\"bytes32\"}],\"name\":\"getState\",\"outputs\":[{\"internalType\":\"uint256\",\"name\":\"\",\"type\":\"uint256\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"internalType\":\"address\",\"name\":\"account\",\"type\":\"address\"}],\"name\":\"grantRole\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"internalType\":\"address\",\"name\":\"account\",\"type\":\"address\"}],\"name\":\"hasRole\",\"outputs\":[{\"internalType\":\"bool\",\"name\":\"\",\"type\":\"bool\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"state_root\",\"type\":\"bytes32\"}],\"name\":\"isStatePresent\",\"outputs\":[{\"internalType\":\"bool\",\"name\":\"\",\"type\":\"bool\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"internalType\":\"address\",\"name\":\"account\",\"type\":\"address\"}],\"name\":\"renounceRole\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"role\",\"type\":\"bytes32\"},{\"internalType\":\"address\",\"name\":\"account\",\"type\":\"address\"}],\"name\":\"revokeRole\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes4\",\"name\":\"interfaceId\",\"type\":\"bytes4\"}],\"name\":\"supportsInterface\",\"outputs\":[{\"internalType\":\"bool\",\"name\":\"\",\"type\":\"bool\"}],\"stateMutability\":\"view\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32\",\"name\":\"state_root\",\"type\":\"bytes32\"}],\"name\":\"updateState\",\"outputs\":[],\"stateMutability\":\"nonpayable\",\"type\":\"function\"},{\"inputs\":[{\"internalType\":\"bytes32[]\",\"name\":\"content\",\"type\":\"bytes32[]\"},{\"internalType\":\"bytes32[]\",\"name\":\"hashes\",\"type\":\"bytes32[]\"},{\"internalType\":\"bytes\",\"name\":\"bitmap\",\"type\":\"bytes\"},{\"internalType\":\"uint32[]\",\"name\":\"depths\",\"type\":\"uint32[]\"}],\"name\":\"verifyInclusionProof\",\"outputs\":[{\"internalType\":\"uint256\",\"name\":\"\",\"type\":\"uint256\"}],\"stateMutability\":\"view\",\"type\":\"function\"}]",
            "https://ganache.bloock.dev"
        ));
        return $client;
    }
}
