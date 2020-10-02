<?php

namespace Bloock\Infrastructure\Hashing;

use Bloock\Infrastructure\Hashing;
use kornrunner\Keccak as LibKeccak;

final class Keccak implements Hashing
{
    public function generateHash(string $data): string
    {
        return LibKeccak::hash($data, 256);
    }
}
