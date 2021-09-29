<?php

namespace Bloock\Record\Entity\Dto;

use Bloock\Record\Entity\Record;

class RecordWriteResponse
{
    public $anchor;
    public $client;
    public $messages;
    public $status;

    public function __construct(array $response)
    {
        $this->anchor = isset($response["anchor"]) ? $response["anchor"] : 0;
        $this->client = isset($response["client"]) ? $response["client"] : "";

        $this->messages = [];
        if (isset($response["messages"]) && $response["messages"] != null) {
            foreach ($response["messages"] as &$message) {
                array_push($this->messages, $message);
            }
        }

        $this->status = isset($response["status"]) ? $response["status"] : "Pending";
    }
}
