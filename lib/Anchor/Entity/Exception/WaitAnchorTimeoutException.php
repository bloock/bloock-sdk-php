<?php

namespace Bloock\Anchor\Entity\Exception;

use Exception;

final class WaitAnchorTimeoutException extends Exception
{
    public function __construct()
    {
        parent::__construct("Timeout exceeded while waiting for anchor");
    }
}
