***

# WebhookClient

Provides functionality for interacting with [Bloock webhooks](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\WebhookClient`



## Properties


### bridge



```php
private $bridge
```






***

### config



```php
private $config
```






***

## Methods


### __construct

Creates a new WebhookClient with the provided configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### verifyWebhookSignature

Verifies the signature of a webhook payload using the provided parameters.

```php
public verifyWebhookSignature(string $payload, string $header, string $secretKey, bool $enforceTolerance): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **string** |  |
| `$header` | **string** |  |
| `$secretKey` | **string** |  |
| `$enforceTolerance` | **bool** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-03-04
