<?php

namespace Bloock\Infrastructure;

use stdClass;

class Signature implements \JsonSerializable
{
    public string $signature;
    public array $headers;

    function __construct(string $signature, array $headers)
    {
        $this->signature = $signature;
        $this->headers = $headers;
    }

    public function jsonSerialize(): mixed
    {
        if (!isset($this->headers) || count($this->headers) <= 0) {
            return array(
                'header' => new stdClass,
                'signature' => $this->signature,
            );
        } else {
            return array(
                'header' => $this->headers,
                'signature' => $this->signature,
            );
        }
    }
}

class Headers
{
    public const KTY_KEY = 'kty';
    public const CRV_KEY = 'crv';
    public const ALG_KEY = 'alg';
    public const KID_KEY = 'kid';

    public string $kty;
    public string $crv;
    public string $alg;
    public string $kid;
    public array $headers;

    function __construct(string $kty, string $crv, string $alg, string $kid, array $headers)
    {
        $this->kty = $kty;
        $this->crv = $crv;
        $this->alg = $alg;
        $this->kid = $kid;
        $this->headers = $headers;
    }
}

interface SigningClient
{
    public function sign(array $payload, string $rawPrivateKey, array $headers = null): Signature;
    public function verify(array $payload, Signature ...$signatures): bool;
}
