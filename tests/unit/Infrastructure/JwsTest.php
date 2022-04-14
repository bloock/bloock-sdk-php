<?php

namespace Bloock\Tests;

use Bloock\Infrastructure\Signature\JWSClient;
use Bloock\Infrastructure\Signature\Headers;
use Bloock\Infrastructure\Signature;
use Bloock\Config\Entity\Configuration;
use PHPUnit\Framework\TestCase;

final class JwsTest extends TestCase
{
    private $signatureClient;

    protected function setUp(): void
    {
        $this->signatureClient = new JWSClient();
    }
    /**
     * @group unit
     */
    public function test_signature_1()
    {
        $dataToSign = array(
            'hello' => 'world'
        );
        $rawPrivateKey = 'ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457';
        $myHeaders = array(
            'key1' => 'value1',
            'key2' => 400
        );

        $payload = json_encode($dataToSign);

        $signature = $this->signatureClient->JWSSign($rawPrivateKey, $payload, $myHeaders);

        $signatureHeaders = $signature->getHeaders();
        $this->assertEquals($signatureHeader[Config::KTY_KEY], Headers::KEY_TYPE_ALGORITHM);
    }
}
