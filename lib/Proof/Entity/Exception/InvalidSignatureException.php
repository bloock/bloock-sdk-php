<?php

namespace Bloock\Proof\Entity\Exception;

use Exception;

final class InvalidSignatureException extends Exception
{
    public function __construct()
    {
        parent::__construct("Invalid signature provided");
    }
}
