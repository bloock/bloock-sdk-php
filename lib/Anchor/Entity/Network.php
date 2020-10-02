<?php

namespace Bloock\Anchor\Entity;

class Network
{
    public string $name;
    public string $state;
    public string $txHash;

    public function __construct(string $name, string $state, string $txHash)
    {
        $this->name = $name;
        $this->state = $state;
        $this->txHash = $txHash;
    }
}
