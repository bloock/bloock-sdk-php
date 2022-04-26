<?php

namespace Bloock\Record\Entity\Exception;

use Exception;

final class InvalidJsonException extends Exception
{
    public function __construct()
    {
        parent::__construct("Invalid JSON provided");
    }
}
