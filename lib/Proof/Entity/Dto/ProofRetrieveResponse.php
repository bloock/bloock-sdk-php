<?php

namespace Bloock\Proof\Entity\Dto;

use Bloock\Anchor\Entity\Network;

class ProofRetrieveResponse
{
    public array $leaves;
    public array $nodes;
    public string $depth;
    public string $bitmap;
    public string $root;

    public function __construct(array $response)
    {
        $this->leaves = $response["leaves"];
        $this->nodes = $response["nodes"];
        $this->depth = $response["depth"];
        $this->bitmap = $response["bitmap"];
        $this->root = $response["root"];
    }
}
