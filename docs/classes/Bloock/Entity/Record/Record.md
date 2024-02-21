***

# Record

Represents a record with payload, hash, and configuration data.



* Full name: `\Bloock\Entity\Record\Record`



## Properties


### payload



```php
private string $payload
```






***

### hash



```php
private string $hash
```






***

### configData



```php
private \Bloock\ConfigData $configData
```






***

## Methods


### __construct

Constructs a Record object with the specified parameters.

```php
public __construct(string $payload, string $hash, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$payload` | **string** |  |
| `$hash` | **string** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Record $record, \Bloock\ConfigData $configData): \Bloock\Entity\Record\Record
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Record** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### getHash

Retrieves the hash of the record.

```php
public getHash(): string
```











**Throws:**

- [`Exception`](../../../Exception.md)



***

### getPayload

Retrieves the payload of the record.

```php
public getPayload(): array
```











**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\Record
```












***

### retrieve

Returns the payload of the record.

```php
public retrieve(): array
```












***

### setProof

Sets the proof for a record.

```php
public setProof(\Bloock\Entity\Integrity\Proof $proof): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$proof` | **\Bloock\Entity\Integrity\Proof** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***


***
> Automatically generated on 2024-02-21
