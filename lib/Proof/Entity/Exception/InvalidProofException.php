<?php

namespace Bloock\Proof\Entity\Exception;

use Exception;

final class InvalidProofException extends Exception
{
    public function __construct()
    {
        parent::__construct("The provided proof is invalid.");
    }
}
