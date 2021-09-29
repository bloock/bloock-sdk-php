<?php

namespace Bloock\Anchor\Entity\Dto;

use Bloock\Anchor\Entity\Network;

class AnchorRetrieveResponse
{
    public $anchorId;
    public $blockRoots;
    public $networks;
    public $root;
    public $status;

    public function __construct(array $response)
    {
        $this->anchorId = $response["anchor_id"] ?: 0;
        $this->blockRoots = $response["block_roots"] ?: [];

        $networks = $response["networks"] ?: [];
        $this->networks = [];
        foreach ($networks as &$network) {
            array_push($this->networks, new Network($network["name"], $network["state"], $network["tx_hash"]));
        }

        $this->root = $response["root"] ?: "";
        $this->status = $response["status"] ?: "Pending";
    }
}
