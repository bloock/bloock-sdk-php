***

# AuthenticityClient

Represents a client for interacting with the [Bloock Authenticity service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\AuthenticityClient`



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

Creates a new instance of the AuthenticityClient with default configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### generateEcdsaKeyPair

Generates ECDSA key pair for signing records.

```php
public generateEcdsaKeyPair(): \Bloock\Entity\Key\EcdsaKeyPair
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.







***

### sign

Signs a Bloock record using the specified signer.

```php
public sign(\Bloock\Entity\Record\Record $record, \Bloock\Entity\Authenticity\Signer $signer): \Bloock\Entity\Authenticity\Signature
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |
| `$signer` | **\Bloock\Entity\Authenticity\Signer** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### verify

Verifies the authenticity of a Bloock record.

```php
public verify(\Bloock\Entity\Record\Record $record): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getSignatures

Gets the signatures associated with a Bloock record.

```php
public getSignatures(\Bloock\Entity\Record\Record $record): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-02-29
