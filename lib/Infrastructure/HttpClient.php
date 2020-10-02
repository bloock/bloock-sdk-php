<?php

namespace Bloock\Infrastructure;

interface HttpClient
{
    public function setApiKey(string $apiKey): void;
    public function get(string $url, array $headers = []): array;
    public function post(string $url, $body, array $headers = []): array;
}
