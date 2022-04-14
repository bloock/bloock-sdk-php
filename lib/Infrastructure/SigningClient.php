<?php

namespace Bloock\Infrastructure;

use Bloock\Infrastructure\Signature\Signature;

interface SigningClient
{
    public function JWSSign(string $rawPrivateKey, string $payload, array $headers = null): Signature;
    public function JWSVerify(array $payload, array $signatures): array;
}