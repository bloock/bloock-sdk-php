<?php

namespace Bloock\Record\Entity\Document;

use Bloock\Proof\Entity\Proof;

abstract class Document
{
    protected $data;
    protected $payload;
    protected ?array $signature;
    protected ?Proof $proof;

    protected function __construct($src)
    {
        $this->setup($src);

        $this->proof = $this->fetchProof();
        $this->signature = $this->fetchSignature();
        $this->data = $this->fetchData();
        $this->payload = $this->fetchPayload();
    }

    protected abstract function setup($src): void;

    protected abstract function fetchMetadata(string $key);
    protected abstract function fetchData();
    protected function fetchProof() {
        return $this->fetchMetadata("proof");
    }
    protected function fetchSignature() {
        return $this->fetchMetadata("signature");
    }
    protected function fetchPayload() {
        $metadata = [];
        if (isset($this->signature)) {
            $metadata['signature'] = $this->signature;
        }
        
        return $this->buildFile($metadata);
    }

    public function getData() {
        return $this->data;
    }
    public function getProof(): ?Proof {
        return $this->proof;
    }
    public function getSignature() {
        return $this->signature;
    }
    public function getPayload() {
        return $this->payload;
    }

    public abstract function getPayloadBytes(): array;

    public function setProof(Proof $proof): void {
        $this->proof = $proof;
    }
    public function setSignature($signature): void {
        $this->signature = $signature;
    }

    public function build() {
        $metadata = [];
        
        if (isset($this->proof)) {
            $metadata['proof'] = $this->proof;
        }

        if (isset($this->signature)) {
            $metadata['signature'] = $this->signature;
        }

        return $this->buildFile($metadata);
    }

    protected abstract function buildFile(array $metadata);
}