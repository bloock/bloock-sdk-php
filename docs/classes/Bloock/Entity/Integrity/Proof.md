***

# Proof

Represents a proof, including leaves, nodes, depth, bitmap, and anchor information.



* Full name: `\Bloock\Entity\Integrity\Proof`



## Properties


### leaves



```php
private array $leaves
```






***

### nodes



```php
private array $nodes
```






***

### depth



```php
private string $depth
```






***

### bitmap



```php
private string $bitmap
```






***

### anchor



```php
private \Bloock\Entity\Integrity\ProofAnchor $anchor
```






***

## Methods


### __construct

Constructs a Proof object with the specified parameters.

```php
public __construct(array $leaves, array $nodes, string $depth, string $bitmap, \Bloock\Entity\Integrity\ProofAnchor $anchor): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$leaves` | **array** |  |
| `$nodes` | **array** |  |
| `$depth` | **string** |  |
| `$bitmap` | **string** |  |
| `$anchor` | **\Bloock\Entity\Integrity\ProofAnchor** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Proof $proof): \Bloock\Entity\Integrity\Proof
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$proof` | **\Bloock\Proof** |  |





***

### getLeaves

Gets the leaves of the proof.

```php
public getLeaves(): array
```












***

### getNodes

Gets the nodes of the proof.

```php
public getNodes(): array
```












***

### getDepth

Gets the depth of the proof.

```php
public getDepth(): string
```












***

### getBitmap

Gets the bitmap of the proof.

```php
public getBitmap(): string
```












***

### getAnchor

Gets the anchor of the proof.

```php
public getAnchor(): \Bloock\Entity\Integrity\ProofAnchor
```












***

### toProto



```php
public toProto(): \Bloock\Proof
```












***


***
> Automatically generated on 2024-04-16
