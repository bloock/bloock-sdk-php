<?php

namespace Bloock\Infrastructure\Signature\Exception;

use Exception;

final class PrivateKeyNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct("No private key specified.");
    }
}