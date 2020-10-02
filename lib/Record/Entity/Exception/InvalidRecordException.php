<?php

namespace Bloock\Record\Entity\Exception;

use Exception;

final class InvalidRecordException extends Exception
{
    public function __construct()
    {
        parent::__construct("Record not valid");
    }
}
