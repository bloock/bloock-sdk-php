<?php

namespace Bloock\Anchor\Entity;

class Anchor
{
    public $id;
    public $blockRoots;
    public $networks;
    public $root;
    public $status;

    public function __construct(int $id, array $blockRoots, array $networks, string $root, string $status)
    {
        $this->id = $id;
        $this->blockRoots = $blockRoots;
        $this->networks = $networks;
        $this->root = $root;
        $this->status = $status;
    }
}
