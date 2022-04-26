<?php

namespace Bloock\Infrastructure\Signature\Exception;

use Exception;

final class InvalidHeaderException extends Exception
{
    public function __construct(string $message)
    {
        parent::__construct("Invalid header: " . $message);
    }
}
