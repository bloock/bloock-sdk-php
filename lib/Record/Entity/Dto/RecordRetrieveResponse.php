<?php

namespace Bloock\Record\Entity\Dto;

use Bloock\Record\Entity\Record;

class RecordRetrieveResponse
{
    public $anchor;
    public $client;
    public $message;
    public $status;

    public function __construct(array $response)
    {
        $this->anchor = isset($response["anchor"]) ? $response["anchor"] : 0;
        $this->client = isset($response["client"]) ? $response["client"] : "";
        $this->message = isset($response["message"]) ? $response["message"] : "";
        $this->status = isset($response["status"]) ? $response["status"] : "Pending";
    }
}
