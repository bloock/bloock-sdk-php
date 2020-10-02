<?php

namespace Bloock\Proof\Entity\Exception;

use Exception;

final class ProofNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct("Couldn't get proof for specified records.");
    }
}
