<?php

namespace Bloock\Anchor\Repository;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Anchor\Entity\Dto\AnchorRetrieveResponse;

interface IAnchorRepository
{
    public function getAnchor(int $anchor): AnchorRetrieveResponse;
}
