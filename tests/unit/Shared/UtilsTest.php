<?php


namespace Bloock\Tests;

use Bloock\Shared\Utils;
use PHPUnit\Framework\TestCase;

final class UtilsTest extends TestCase
{
    /**
     * @group unit
     */
    public function test_is_hex_success()
    {
        $hex = "123456789abcdef";
        $this->assertTrue(Utils::isHex($hex));
    }

    /**
     * @group unit
     */
    public function test_is_hex_errror()
    {
        $hex = "abcdefg";
        $this->assertFalse(Utils::isHex($hex));
    }

    /**
     * @group unit
     */
    public function test_uint16_to_string_success()
    {
        $hex = "0100";
        $arr = Utils::hexToUint16($hex);
        $this->assertEquals(array(256), $arr);

        $arr2 = Utils::hexToBytes($hex);
        $this->assertEquals(array(1, 0), $arr2);
    }
}
