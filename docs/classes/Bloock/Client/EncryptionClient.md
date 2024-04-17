***

# EncryptionClient

Represents a client for interacting with the [Bloock Encryption service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\EncryptionClient`



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

Creates a new instance of the EncryptionClient with the provided configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### generateRsaKeyPair

GenerateRsaKeyPair generates an RSA key pair for encryption.

```php
public generateRsaKeyPair(): \Bloock\Entity\Key\RsaKeyPair
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.







***

### encrypt

Encrypts a Bloock record using the specified encrypter.

```php
public encrypt(\Bloock\Entity\Record\Record $record, \Bloock\Entity\Encryption\Encrypter $encrypter): \Bloock\Entity\Record\Record
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |
| `$encrypter` | **\Bloock\Entity\Encryption\Encrypter** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### decrypt

Decrypts a Bloock record using the specified decrypter.

```php
public decrypt(\Bloock\Entity\Record\Record $record, \Bloock\Entity\Encryption\Encrypter $decrypter): \Bloock\Entity\Record\Record
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |
| `$decrypter` | **\Bloock\Entity\Encryption\Encrypter** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getEncryptionAlg

Gets the encryption algorithm used for a Bloock record.

```php
public getEncryptionAlg(\Bloock\Entity\Record\Record $record): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-04-17
