<?php

namespace Bloock\Infrastructure\Http;

use Bloock\Infrastructure\HttpClient;
use Bloock\Infrastructure\Http\Exception\HttpException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use RuntimeException;

final class GuzzleHttp implements HttpClient
{
    private $client;
    private $apiKey;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function setApiKey(string $apiKey): void
    {
        $this->apiKey = $apiKey;
    }

    public function get(string $url, array $headers = []): array
    {
        return $this->request("GET", $url, $headers, []);
    }

    public function post(string $url, $body, array $headers = []): array
    {
        return $this->request("POST", $url, $headers, $body);
    }

    private function request(string $method, string $url, array $headers, $body): array
    {
        $headers["X-Api-Key"] = $this->apiKey;

        try {
            $response = $this->client->request($method, $url, [
                "headers" => $headers,
                "json" => $body
            ]);
        } catch (BadResponseException $exception) {
            $response = $exception->getResponse();

            if ($response->getStatusCode() == 401) {
                throw new HttpException("Invalid API Key provided");
            } else {
                $jsonResponse = (string) $response->getBody();
                $exception = json_decode($jsonResponse, true);
                $message = $exception["message"] ? $exception["message"] : $response->getStatusCode();
                throw new HttpException($message);
            }
        } catch (RuntimeException $exception) {
            throw new HttpException();
        }

        $content = (string) $response->getBody();
        return json_decode($content, true);
    }
}
