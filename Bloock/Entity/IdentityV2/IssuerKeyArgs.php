<?php

namespace Bloock\Entity\IdentityV2;

use Bloock\Entity\Key\LocalKey;
use Bloock\Entity\Key\ManagedKey;
use Exception;

class IssuerKeyArgs
{
    public ?LocalKey $localKey = null;
    public ?ManagedKey $managedKey = null;

    /**
     * @throws Exception
     */
    public function __construct($key)
    {
        if ($key instanceof LocalKey) {
            $this->localKey = $key;
        } else if ($key instanceof ManagedKey) {
            $this->managedKey = $key;
        } else {
            throw new Exception("Invalid $key provided. Must be of type LocalKey or ManagedKey");
        }
    }
}