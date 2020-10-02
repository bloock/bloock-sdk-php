<?php

namespace Bloock\Anchor\Entity;

class Anchor
{
    public int $id;
    public array $blockRoots;
    public array $networks;
    public string $root;
    public string $status;

    public function __construct(int $id, array $blockRoots, array $networks, string $root, string $status)
    {
        $this->id = $id;
        $this->blockRoots = $blockRoots;
        $this->networks = $networks;
        $this->root = $root;
        $this->status = $status;
    }
}
