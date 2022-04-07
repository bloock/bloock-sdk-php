<?php

namespace Bloock\Infrastructure\Http\Exception;

use Exception;

final class HttpException extends Exception
{
    public function __construct(string $message = null)
    {
        if (isset($message)) {
            parent::__construct("HttpClient response was not successful: $message");
        }
    }
}
