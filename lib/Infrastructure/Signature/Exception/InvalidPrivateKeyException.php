<?php

namespace Bloock\Infrastructure\Signature\Exception;

use Exception;

final class InvalidPrivateKeyException extends Exception
{
    public function __construct()
    {
        parent::__construct("Invalid private key provided.");
    }
}
