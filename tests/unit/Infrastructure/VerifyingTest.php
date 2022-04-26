<?php

namespace Bloock\Tests;

use Bloock\Config\Repository\ConfigData;
use Bloock\Infrastructure\Signature;
use Bloock\Infrastructure\Signature\JWSClient;
use Bloock\Shared\Utils;
use PHPUnit\Framework\TestCase;
use Throwable;

final class VerifyingTest extends TestCase
{
    private $signatureClient;
    private $privateKey;
    private $payload;
    private $headers;

    protected function setUp(): void
    {
        $this->signatureClient = new JWSClient();
        $this->privateKey = "ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457";
        $this->payload = Utils::stringToBytes("hello world");
        $this->headers = array('optional' => 'optional');
        $config = new ConfigData();
    }
    /**
     * @group unit
     */
    public function test_JWSVerify_valid_jws()
    {
        $signature = $this->signatureClient->sign($this->payload, $this->privateKey, $this->headers);

        $this->assertNotNull($this->signatureClient->verify($this->payload, $signature));
    }

    /**
     * @group unit
     */
    public function test_JWSVerify_valid_jws_no_headers()
    {
        $signature = $this->signatureClient->sign($this->payload, $this->privateKey);

        $this->assertNotNull($this->signatureClient->verify($this->payload, $signature));
    }

    /**
     * @group unit
     */
    public function test_JWSVerify_kid_jws_not_found()
    {
        $signature = new Signature('', array());

        $this->expectException(Throwable::class);
        $this->signatureClient->verify($this->payload, $signature);
    }

    /**
     * @group unit
     */
    public function test_JWSVerify_alg_not_defined()
    {
        $signature = new Signature(
            '4NIuhdR9Hhg7tlU0sxup3cdPCw39chGLbLg0_rsvD9PTMjt0jzERHtqqeD_e4BLFq4QY6WF9xFuNm9lIQoEqpw',
            array(
                'kty' => 'EC',
                'crv' => 'secp256k1',
                'alg' => '',
                'kid' => '042f809cad1aab1935cbfc3c5f52f776d1420a9444a65f8c89432e14c66d887ecd193cc3007bdcac62b40df3ca030a4e04be1a81f7c795b62dc6aa8ac56ba18a7e'
            )
        );

        $this->expectException(Throwable::class);
        $this->signatureClient->verify($this->payload, $signature);
    }

    /**
     * @group unit
     */
    public function test_JWSVerify_signature_not_defined()
    {
        $signature = new Signature(
            '',
            array(
                'kty' => 'EC',
                'crv' => 'secp256k1',
                'alg' => 'ES256K',
                'kid' => '042f809cad1aab1935cbfc3c5f52f776d1420a9444a65f8c89432e14c66d887ecd193cc3007bdcac62b40df3ca030a4e04be1a81f7c795b62dc6aa8ac56ba18a7e',
                'pub' => 'publicKey'
            )
        );

        $this->assertFalse($this->signatureClient->verify($this->payload, $signature));
    }

    /**
     * @group unit
     */
    public function test_JWSVerify_invalid_public_key()
    {
        $signature = new Signature(
            '4NIuhdR9Hhg7tlU0sxup3cdPCw39chGLbLg0_rsvD9PTMjt0jzERHtqqeD_e4BLFq4QY6WF9xFuNm9lIQoEqpw',
            array(
                'kty' => 'EC',
                'crv' => 'secp256k1',
                'alg' => 'ES256K',
                'kid' => 'invalid-public-key',
                'pub' => 'publicKey'
            )
        );

        $this->assertFalse($this->signatureClient->verify($this->payload, $signature));
    }
}
