<?php

namespace Bloock\Tests;

use Bloock\Config\Repository\ConfigData;
use Bloock\Infrastructure\Signature\Exception\InvalidPrivateKeyException;
use Bloock\Infrastructure\Signature\Exception\PrivateKeyNotFoundException;
use Bloock\Infrastructure\Signature\JWSClient;
use Bloock\Shared\Utils;
use PHPUnit\Framework\TestCase;

final class SigningTest extends TestCase
{
    private $signatureClient;
    private $privateKey;
    private $payload;
    private $headers;
    private $configData;

    protected function setUp(): void
    {
        $this->signatureClient = new JWSClient();
        $this->privateKey = "ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457";
        $this->payload = Utils::stringToBytes("hello world");
        $this->headers = array('optional' => 'optional');
        $config = new ConfigData();
        $this->configData = $config->getConfiguration();
    }
    /**
     * @group unit
     */
    public function test_JWSSign_valid_with_headers()
    {
        $signature = $this->signatureClient->sign($this->payload, $this->privateKey, $this->headers);

        $this->assertTrue(isset($signature));
        $this->assertEquals($signature->headers['alg'], $this->configData->SIGNATURE_ALGORITHM);
        $this->assertEquals($signature->headers['crv'], $this->configData->ELLIPTIC_CURVE_KEY);
        $this->assertEquals($signature->headers['kty'], $this->configData->KEY_TYPE_ALGORITHM);
        $this->assertEquals($signature->headers['kid'], '04f21b2b2fec758670c2906e685afa6bdec4a3655a2bcd5f12cabf0ebfbcc83d44eba21d1ba84e520cdd163d510a1e27f8f803c0ad941c7b50a91bd5e11556edaf');
        $this->assertEquals($signature->headers['optional'], "optional");
    }

    /**
     * @group unit
     */
    public function test_JWSSign_valid_with_no_headers()
    {
        $signature = $this->signatureClient->sign($this->payload, $this->privateKey);

        $this->assertTrue(isset($signature));
        $this->assertEquals($signature->headers['alg'], $this->configData->SIGNATURE_ALGORITHM);
        $this->assertEquals($signature->headers['crv'], $this->configData->ELLIPTIC_CURVE_KEY);
        $this->assertEquals($signature->headers['kty'], $this->configData->KEY_TYPE_ALGORITHM);
        $this->assertEquals($signature->headers['kid'], '04f21b2b2fec758670c2906e685afa6bdec4a3655a2bcd5f12cabf0ebfbcc83d44eba21d1ba84e520cdd163d510a1e27f8f803c0ad941c7b50a91bd5e11556edaf');
    }

    /**
     * @group unit
     */
    public function test_JWSSign_invalid_without_private_key()
    {
        $this->expectException(PrivateKeyNotFoundException::class);
        $this->signatureClient->sign($this->payload, '', $this->headers);
    }

    /**
     * @group unit
     */
    public function test_JWSSign_invalid_length_private_key()
    {
        $signature = $this->signatureClient->sign($this->payload, 'ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c945', $this->headers);
        $this->assertNotNull($signature);
    }

    /**
     * @group unit
     */
    public function test_JWSSign_invalid_private_key()
    {
        $this->expectException(InvalidPrivateKeyException::class);
        $this->signatureClient->sign($this->payload, 'invalid-private-key', $this->headers);
    }

    /**
     * @group unit
     */
    public function test_JWSSign_invalid_private_key_other_address_format()
    {
        $this->expectException(InvalidPrivateKeyException::class);
        $this->signatureClient->sign($this->payload, 'QU2jsEnrroQ9isMzBKHS4brYreBUzp62GhVd2b5qafi7XrYsv3Lq', $this->headers);
    }

    /**
     * @group unit
     */
    public function test_JWSSign_invalid_private_key_invalid_character()
    {
        $this->expectException(InvalidPrivateKeyException::class);
        $this->signatureClient->sign($this->payload, 'ecb8e5+4bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457', $this->headers);
    }
}
