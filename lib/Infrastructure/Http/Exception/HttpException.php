<?php

namespace Bloock\Infrastructure\Http\Exception;

use Exception;

final class HttpException extends Exception
{
    public function __construct(string $message = null)
    {
        if ($message != null) {
            parent::__construct("HttpClient response was not successful: $message");
        }
    }
}
