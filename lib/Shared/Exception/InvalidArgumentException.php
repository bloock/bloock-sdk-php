<?php

namespace Bloock\Shared\Exception;

use Exception;

final class InvalidArgumentException extends Exception
{
    public function __construct()
    {
        parent::__construct("Invalid argument provided");
    }
}
