<?php

namespace Bloock\Record\Entity\Document;

use Bloock\Infrastructure\Signature;
use Bloock\Proof\Entity\Proof;

abstract class Document
{
    protected $data;
    protected $payload;
    protected ?array $signatures;
    protected ?Proof $proof;

    protected function __construct($src)
    {
        $this->setup($src);

        $this->proof = $this->fetchProof();
        $this->signatures = $this->fetchSignatures();
        $this->data = $this->fetchData();
        $this->payload = $this->fetchPayload();
    }

    protected abstract function setup($src): void;

    protected abstract function fetchMetadata(string $key);
    protected abstract function fetchData();
    protected function fetchProof()
    {
        $rawProof = $this->fetchMetadata("proof");
        if (isset($rawProof)) {
            return new Proof($rawProof['leaves'], $rawProof['nodes'], $rawProof['depth'], $rawProof['bitmap'], $rawProof['anchor']);
        }
        return null;
    }
    protected function fetchSignatures()
    {
        $rawSignatures = $this->fetchMetadata("signatures");

        if (isset($rawSignatures)) {
            $signatures = array();
            foreach ($rawSignatures as $rawSignature) {
                array_push($signatures, new Signature($rawSignature['signature'], $rawSignature['header']));
            }
            return $signatures;
        }
        return null;
    }
    protected function fetchPayload()
    {
        $metadata = [];
        if (isset($this->signatures)) {
            $metadata['signatures'] = $this->signatures;
        }

        return $this->buildFile($metadata);
    }

    public function getData()
    {
        return $this->data;
    }
    public function getProof(): ?Proof
    {
        return $this->proof;
    }
    public function getSignatures(): ?array
    {
        return $this->signatures;
    }
    public function getPayload()
    {
        return $this->payload;
    }

    public abstract function getDataBytes(): array;
    public abstract function getPayloadBytes(): array;

    public function setProof(Proof $proof): void
    {
        $this->proof = $proof;
    }
    public function addSignature(Signature ...$signatures): void
    {
        if (!isset($this->signatures)) {
            $this->signatures = [];
        }

        array_push($this->signatures, ...$signatures);
    }

    public function build()
    {
        $metadata = [];

        if (isset($this->proof)) {
            $metadata['proof'] = $this->proof;
        }

        if (isset($this->signatures)) {
            $metadata['signatures'] = $this->signatures;
        }

        return json_encode($this->buildFile($metadata));
    }

    protected abstract function buildFile(array $metadata);
}
