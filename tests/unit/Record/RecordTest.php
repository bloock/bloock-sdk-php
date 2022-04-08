<?php


namespace Bloock\Tests;

use Bloock\Record\Entity\Record;
use Bloock\Shared\Utils;
use PHPUnit\Framework\TestCase;

final class RecordTest extends TestCase
{
    /**
     * @group unit
     */
    public function test_from_hash()
    {
        $record = Record::fromHash("test_hash");
        $this->assertEquals("test_hash", $record->getHash());
    }

    /**
     * @group unit
     */
    public function test_from_hex()
    {
        $s = "10101010101010101010101010101010101010101010101010101010101010101111111111111111111111111111111111111111111111111111111111111111";
        $this->assertEquals("e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994a5", Record::fromHex($s)->getHash());
    }

    /**
     * @group unit
     */
    public function test_from_string()
    {
        $s = "testing keccak";
        $this->assertEquals("7e5e383e8e70e55cdccfccf40dfc5d4bed935613dffc806b16b4675b555be139", Record::fromString($s)->getHash());
    }

    /**
     * @group unit
     */
    public function test_from_uint8()
    {
        $array = array(
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16, 16,
            17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17,
            17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17, 17
        );
        $this->assertEquals("e016214a5c4abb88b8b614a916b1a6f075dfcf6fbc16c1e9d6e8ebcec81994a5", Record::fromUint8Array($array)->getHash());
    }

    /**
     * @group unit
     */
    public function test_from_json()
    {
        $json = array(
            'hello' => 'world'
        );
        $this->assertEquals("586e9b1e1681ba3ebad5ff5e6f673d3e3aa129fcdb76f92083dbc386cdde4312", Record::fromJSON($json)->getHash());
    }

    /**
     * @group unit
     */
    public function test_from_json_with_metadata()
    {
        $json = array(
            '_payload_' => array(
                'hello' => 'world'
            ),
            '_metadata_' => array(
                'signature' => array('signature1')
            )
        );
        $this->assertEquals("42fd3e3f6c78b239cdbfc23d9e36134bac28233347e421c2c83002276d2dbbc4", Record::fromJSON($json)->getHash());
    }

    /**
     * @group unit
     */
    public function test_is_valid_okay()
    {
        $record = Record::fromHash("1010101010101010101010101010101010101010101010101010101010101010");
        $this->assertTrue(Record::isValid($record));
    }

    /**
     * @group unit
     */
    public function test_is_valid_missing_char()
    {
        $record = Record::fromHash("010101010101010101010101010101010101010101010101010101010101010");
        $this->assertFalse(Record::isValid($record));
    }

    /**
     * @group unit
     */
    public function test_is_valid_wrong_char()
    {
        $record = Record::fromHash("G010101010101010101010101010101010101010101010101010101010101010");
        $this->assertFalse(Record::isValid($record));
    }

    /**
     * @group unit
     */
    public function test_is_valid_not_record_instance()
    {
        $record = "123456789abcdef123456789abcdef123456789abcdef123456789abcdef123g";
        $this->assertFalse(Record::isValid($record));
    }
}
