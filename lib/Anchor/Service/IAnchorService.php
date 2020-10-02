<?php

namespace Bloock\Anchor\Service;

use Bloock\Anchor\Entity\Anchor;

interface IAnchorService
{
    public function getAnchor(int $anchor): Anchor;
    public function waitAnchor(int $anchor, int $timeout = 120000): Anchor;
}
