<?php

namespace Bloock\Anchor\Repository;

use Bloock\Anchor\Entity\Anchor;

interface IAnchorRepository
{
    public function getAnchor(int $anchor): Anchor;
}
