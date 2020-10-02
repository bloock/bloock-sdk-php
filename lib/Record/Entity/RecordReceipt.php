<?php

namespace Bloock\Record\Entity;

class RecordReceipt
{
    public int $anchor;
    public string $client;
    public string $record;
    public string $status;

    public function __construct(int $anchor, string $client, string $record, string $status)
    {
        $this->anchor = $anchor;
        $this->client = $client;
        $this->record = $record;
        $this->status = $status;
    }
}
