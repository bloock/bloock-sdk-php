<?php

namespace Bloock\Record\Entity\Exception;

use Exception;

final class NoSignatureFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct("Could not find any signature in the Record's metadata");
    }
}
