<?php

namespace Bloock\Anchor\Entity\Exception;

use Exception;

final class AnchorNotFoundException extends Exception
{
    public function __construct()
    {
        parent::__construct("Anchor not found");
    }
}
