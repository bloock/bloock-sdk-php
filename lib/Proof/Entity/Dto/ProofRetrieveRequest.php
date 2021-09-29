<?php

namespace Bloock\Proof\Entity\Dto;

use Bloock\Record\Entity\Record;

class ProofRetrieveRequest
{
    public $messages;

    public function __construct(array $records)
    {
        $this->messages = [];
        foreach ($records as &$record) {
            if ($record instanceof Record) {
                array_push($this->messages, $record->getHash());
            }
        }
    }
}
