***

# CredentialBuilder

Helps construct credentials by specifying various attributes.



* Full name: `\Bloock\Entity\IdentityV2\CredentialBuilder`



## Properties


### schemaId



```php
private string $schemaId
```






***

### issuerDid



```php
private string $issuerDid
```






***

### holderDid



```php
private string $holderDid
```






***

### expiration



```php
private int $expiration
```






***

### version



```php
private int $version
```






***

### signer



```php
private \Bloock\Signer $signer
```






***

### configData



```php
private \Bloock\ConfigData $configData
```






***

### stringAttributes



```php
private array $stringAttributes
```






***

### integerAttributes



```php
private array $integerAttributes
```






***

### decimalAttributes



```php
private array $decimalAttributes
```






***

### booleanAttributes



```php
private array $booleanAttributes
```






***

### dateAttributes



```php
private array $dateAttributes
```






***

### datetimeAttributes



```php
private array $datetimeAttributes
```






***

## Methods


### __construct

Creates a new CredentialBuilder instance with the specified parameters.

```php
public __construct(string $schemaId, string $issuerDid, string $holderDid, int $expiration, int $version, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaId` | **string** |  |
| `$issuerDid` | **string** |  |
| `$holderDid` | **string** |  |
| `$expiration` | **int** |  |
| `$version` | **int** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### withStringAttribute

Adds a string attribute to the CredentialBuilder.

```php
public withStringAttribute(string $key, string $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **string** |  |





***

### withIntegerAttribute

Adds an integer attribute to the CredentialBuilder.

```php
public withIntegerAttribute(string $key, int $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int** |  |





***

### withDecimalAttribute

Adds a decimal attribute to the CredentialBuilder.

```php
public withDecimalAttribute(string $key, float $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **float** |  |





***

### withBooleanAttribute

Adds a boolean attribute to the CredentialBuilder.

```php
public withBooleanAttribute(string $key, bool $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **bool** |  |





***

### withDateAttribute

Adds a date attribute to the CredentialBuilder.

```php
public withDateAttribute(string $key, \DateTime $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **\DateTime** |  |





***

### withDatetimeAttribute

Adds a datetime attribute to the CredentialBuilder.

```php
public withDatetimeAttribute(string $key, \DateTime $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **\DateTime** |  |





***

### withSigner

Sets the signer for the CredentialBuilder.

```php
public withSigner(\Bloock\Entity\Authenticity\Signer $signer): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signer` | **\Bloock\Entity\Authenticity\Signer** |  |





***

### build

Creates and returns a Credential using the specified attributes.

```php
public build(): \Bloock\Entity\IdentityV2\CredentialReceipt
```











**Throws:**

- [`Exception`](../../../Exception.md)



***


***
> Automatically generated on 2024-02-07
