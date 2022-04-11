<?php

namespace Bloock\Proof\Entity\Dto;

use Bloock\Anchor\Entity\Network;
use Bloock\Proof\Entity\ProofAnchor;

class ProofRetrieveResponse
{
    public $leaves;
    public $nodes;
    public $depth;
    public $bitmap;
    public $root;
    public $anchor;

    public function __construct(array $response)
    {
        $this->leaves = $response["leaves"];
        $this->nodes = $response["nodes"];
        $this->depth = $response["depth"];
        $this->bitmap = $response["bitmap"];
        $this->root = $response["root"];
        $this->anchor = $response["anchor"];
    }
}
