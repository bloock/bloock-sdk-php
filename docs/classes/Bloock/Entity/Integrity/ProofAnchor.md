***

# ProofAnchor

Represents a proof anchor.



* Full name: `\Bloock\Entity\Integrity\ProofAnchor`



## Properties


### anchorId



```php
private int $anchorId
```






***

### networks



```php
private array $networks
```






***

### root



```php
private string $root
```






***

### status



```php
private string $status
```






***

## Methods


### __construct

Constructs a ProofAnchor object with the specified parameters.

```php
public __construct(int $anchorId, array $networks, string $root, string $status): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$anchorId` | **int** |  |
| `$networks` | **array** |  |
| `$root` | **string** |  |
| `$status` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\ProofAnchor $proofAnchor): \Bloock\Entity\Integrity\ProofAnchor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$proofAnchor` | **\Bloock\ProofAnchor** |  |





***

### getNetworks

Gets the networks of the anchor proof

```php
public getNetworks(): array
```












***

### getAnchorId

Gets the anchor id of the anchor proof.

```php
public getAnchorId(): int
```












***

### getRoot

Gets the root of the anchor proof.

```php
public getRoot(): string
```












***

### getStatus

Gets the status of the anchor proof.

```php
public getStatus(): string
```












***

### toProto



```php
public toProto(): \Bloock\ProofAnchor
```












***


***
> Automatically generated on 2024-02-22
