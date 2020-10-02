<?php

namespace Bloock\Infrastructure;

interface Hashing
{
    public function generateHash(string $data): string;
}
