<?php

namespace Bloock\Infrastructure\Signature\Exception;

use Exception;

final class InvalidSignatureException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct("Couldn't verify signature: " . $message);
    }
}
