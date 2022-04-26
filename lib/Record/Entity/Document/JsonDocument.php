<?php

namespace Bloock\Record\Entity\Document;

use Bloock\Record\Entity\Exception\InvalidJsonException;
use Bloock\Shared\Utils;

class JsonDocument extends Document
{
    private const DATA_KEY = '_payload_';
    private const METADATA_KEY = '_metadata_';

    protected array $source;

    function __construct(string|array $src)
    {
        parent::__construct($src);
    }

    protected function setup($src): void
    {
        if (is_string($src)) {
            $src = json_decode($src, true);
            if ($src == false) {
                throw new InvalidJsonException();
            }
        }

        $this->source = $src;
    }

    protected function fetchMetadata(string $key)
    {
        if (isset($this->source) && isset($this->source[JsonDocument::METADATA_KEY])) {
            $metadata = $this->source[JsonDocument::METADATA_KEY];

            if (isset($metadata) && isset($metadata[$key])) {
                return $metadata[$key];
            }
        }

        return null;
    }
    protected function fetchData()
    {
        if (isset($this->source)) {
            if (isset($this->source[JsonDocument::DATA_KEY])) {
                return $this->source[JsonDocument::DATA_KEY];
            } else {
                return $this->source;
            }
        }

        return null;
    }

    public function getPayload(): array
    {
        return json_decode($this->payload, true);
    }

    public function getPayloadBytes(): array
    {
        if (isset($this->payload)) {
            $json = Utils::stringify(json_decode($this->payload, true));
            return Utils::stringToBytes($json);
        }

        return array();
    }

    public function getDataBytes(): array
    {
        if (isset($this->data)) {
            $json = Utils::stringify($this->data);
            return Utils::stringToBytes($json);
        }

        return array();
    }

    protected function buildFile(array $metadata): string
    {
        $output = null;
        if (count($metadata) > 0) {
            $output = array(
                JsonDocument::DATA_KEY => $this->data,
                JsonDocument::METADATA_KEY => $metadata
            );
        } else {
            $output = $this->data;
        }

        return json_encode($output);
    }
}
