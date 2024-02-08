***

# CredentialBuilder





* Full name: `\Bloock\Entity\Identity\CredentialBuilder`



## Properties


### schemaId



```php
private string $schemaId
```






***

### holderKey



```php
private string $holderKey
```






***

### configData



```php
private \Bloock\ConfigData $configData
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

### stringAttributes



```php
private array $stringAttributes
```






***

### numberAttributes



```php
private array $numberAttributes
```






***

## Methods


### __construct



```php
public __construct(string $schemaId, string $holderKey, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaId` | **string** |  |
| `$holderKey` | **string** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### withBooleanAttribute



```php
public withBooleanAttribute(string $key, bool $value): \Bloock\Entity\Identity\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **bool** |  |





***

### withDateAttribute



```php
public withDateAttribute(string $key, int $value): \Bloock\Entity\Identity\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int** |  |





***

### withDatetimeAttribute



```php
public withDatetimeAttribute(string $key, int $value): \Bloock\Entity\Identity\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int** |  |





***

### withStringAttribute



```php
public withStringAttribute(string $key, string $value): \Bloock\Entity\Identity\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **string** |  |





***

### withNumberAttribute



```php
public withNumberAttribute(string $key, int $value): \Bloock\Entity\Identity\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$value` | **int** |  |





***

### build



```php
public build(): \Bloock\Entity\Identity\CredentialReceipt
```












***


***
> Automatically generated on 2024-02-07
