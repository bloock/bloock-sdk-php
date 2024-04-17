***

# RecordBuilder

Assists in constructing records with various configurations.



* Full name: `\Bloock\Client\RecordBuilder`



## Properties


### payload



```php
private $payload
```






***

### type



```php
private int $type
```






***

### configData



```php
private \Bloock\ConfigData $configData
```






***

### signer



```php
private ?\Bloock\Signer $signer
```






***

### encrypter



```php
private ?\Bloock\Encrypter $encrypter
```






***

### decrypter



```php
private ?\Bloock\Encrypter $decrypter
```






***

## Methods


### __construct

Creates a new RecordBuilder with default configuration.

```php
public __construct( $payload, int $recordTypes, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **** |  |
| `$recordTypes` | **int** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### withSigner

Sets the signer for the RecordBuilder.

```php
public withSigner(\Bloock\Entity\Authenticity\Signer $signer): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signer` | **\Bloock\Entity\Authenticity\Signer** |  |





***

### withEncrypter

Sets the encrypter for the RecordBuilder.

```php
public withEncrypter(\Bloock\Entity\Encryption\Encrypter $encrypter): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$encrypter` | **\Bloock\Entity\Encryption\Encrypter** |  |





***

### withDecrypter

Sets the decrypter for the RecordBuilder.

```php
public withDecrypter(\Bloock\Entity\Encryption\Encrypter $decrypter): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$decrypter` | **\Bloock\Entity\Encryption\Encrypter** |  |





***

### build

Constructs a record based on the RecordBuilder's configuration.

```php
public build(): \Bloock\Entity\Record\Record
```











**Throws:**

- [`Exception`](../../Exception.md)



***

### getDetails

Gets details about other Bloock services (Integrity, Authenticity, Encryption, Availability) configured in the RecordBuilder.

```php
public getDetails(): \Bloock\Entity\Record\RecordDetails
```











**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-04-17
