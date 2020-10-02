<?php

namespace Bloock\Infrastructure;

interface Blockchain
{
    public function validateRoot(string $network, string $root): int;
}
