<?php

namespace Bloock\Record\Entity\Exception;

use Exception;

final class InvalidRecordTypeException extends Exception
{
    public function __construct()
    {
        parent::__construct("This function is not allowed for this Record type");
    }
}
