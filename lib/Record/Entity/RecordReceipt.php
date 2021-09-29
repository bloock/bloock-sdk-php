<?php

namespace Bloock\Record\Entity;

class RecordReceipt
{
    public $anchor;
    public $client;
    public $record;
    public $status;

    public function __construct(int $anchor, string $client, string $record, string $status)
    {
        $this->anchor = $anchor;
        $this->client = $client;
        $this->record = $record;
        $this->status = $status;
    }
}
