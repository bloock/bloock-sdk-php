<?php

namespace Bloock\Record\Entity\Document;

use Bloock\Shared\Utils;

class JsonDocument extends Document
{
    private const DATA_KEY = '_payload_';
    private const METADATA_KEY = '_metadata_';

    protected array $source;

    function __construct($src)
    {
        parent::__construct($src);
    }

    protected function setup($src): void
    {
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

    public function getPayloadBytes(): array
    {
        if (isset($this->payload)) {
            $json = Utils::stringify($this->payload);
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

    protected function buildFile(array $metadata): array
    {
        if (count($metadata) > 0) {
            return array(
                JsonDocument::DATA_KEY => $this->data,
                JsonDocument::METADATA_KEY => $metadata
            );
        } else {
            return $this->data;
        }
    }
}
