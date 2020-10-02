<?php


namespace Bloock\Tests;

use Bloock\Record\Entity\Record;
use PHPUnit\Framework\TestCase;

final class ProofTest extends TestCase
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
