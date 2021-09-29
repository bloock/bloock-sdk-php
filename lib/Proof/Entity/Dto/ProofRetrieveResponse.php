<?php

namespace Bloock\Proof\Entity\Dto;

use Bloock\Anchor\Entity\Network;

class ProofRetrieveResponse
{
    public $leaves;
    public $nodes;
    public $depth;
    public $bitmap;
    public $root;

    public function __construct(array $response)
    {
        $this->leaves = $response["leaves"];
        $this->nodes = $response["nodes"];
        $this->depth = $response["depth"];
        $this->bitmap = $response["bitmap"];
        $this->root = $response["root"];
    }
}
