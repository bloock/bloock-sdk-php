<?php

namespace Bloock\Anchor\Entity;

class Network
{
    public $name;
    public $state;
    public $txHash;

    public function __construct(string $name, string $state, string $txHash)
    {
        $this->name = $name;
        $this->state = $state;
        $this->txHash = $txHash;
    }
}
