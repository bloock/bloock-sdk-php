***

# IdentityCoreClient

Represents a client for interacting with the [Bloock Identity service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\IdentityCoreClient`



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

Creates a new instance of the IdentityCoreClient with the provided configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### buildCredential

Creates a new credential builder for defining a credential on the Bloock Identity service.

```php
public buildCredential(\Bloock\Entity\Identity\Issuer $issuer, string $schemaId, string $holderDid, int $expiration, int $version): \Bloock\Entity\Identity\CredentialCoreBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuer` | **\Bloock\Entity\Identity\Issuer** |  |
| `$schemaId` | **string** |  |
| `$holderDid` | **string** |  |
| `$expiration` | **int** |  |
| `$version` | **int** |  |





***


***
> Automatically generated on 2024-03-14
