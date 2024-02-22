***

# CredentialCoreBuilder

Helps construct credentials by specifying various attributes.



* Full name: `\Bloock\Entity\Identity\CredentialCoreBuilder`



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

### key



```php
private \Bloock\Key $key
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

Creates a new CredentialCoreBuilder instance with the specified parameters.

```php
public __construct(\Bloock\Entity\Identity\Issuer $issuer, string $schemaId, string $holderDid, int $expiration, int $version, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuer` | **\Bloock\Entity\Identity\Issuer** |  |
| `$schemaId` | **string** |  |
| `$holderDid` | **string** |  |
| `$expiration` | **int** |  |
| `$version` | **int** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### withStringAttribute

Adds a string attribute to the CredentialCoreBuilder.

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

Adds an integer attribute to the CredentialCoreBuilder.

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

Adds a decimal attribute to the CredentialCoreBuilder.

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

Adds a boolean attribute to the CredentialCoreBuilder.

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

Adds a date attribute to the CredentialCoreBuilder.

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

Adds a datetime attribute to the CredentialCoreBuilder.

```php
public withDatetimeAttribute(string $key, \DateTime $value): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **\DateTime** |  |





***

### build

Creates and returns a Credential using the specified attributes.

```php
public build(): \Bloock\Entity\Identity\CredentialReceipt
```











**Throws:**

- [`Exception`](../../../Exception.md)



***


***
> Automatically generated on 2024-02-22
