<?php

namespace Bloock\Record\Entity\Signature;

use Bloock\Config\entity\Configuration;
use Bloock\Infrastructure\SigningClient;
use Bloock\Infrastructure\Signature\Headers;
use Bloock\Infrastructure\Signature\Exception\PrivateKeyNotFoundException;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Signature\Algorithm\ES256;
use Jose\Component\KeyManagement\JWKFactory;

class Signature {
    private string $signature;
    private array $headers;

    function __construct(string $signature, array $headers)
    {
        $this->signature = $signature;
        $this->headers = $headers;
    }
    
    public function getHeaders(): array {
        return $this->headers;
    }
}