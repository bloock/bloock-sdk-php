<?php

namespace Bloock\Entity\IdentityV2;

class Attribute
{
    public string $id;
    public $value;

    /**
     * @param string $id
     * @param $value
     */
    public function __construct(string $id, $value)
    {
        $this->id = $id;
        $this->value = $value;
    }
}
