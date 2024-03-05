***

# Anchor

Represents information about an anchor.



* Full name: `\Bloock\Entity\Integrity\Anchor`



## Properties


### id



```php
private int $id
```






***

### blockRoots



```php
private \Google\Protobuf\Internal\RepeatedField $blockRoots
```






***

### networks



```php
private \Google\Protobuf\Internal\RepeatedField $networks
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

Constructs an Anchor object with the specified parameters.

```php
public __construct(int $id, \Google\Protobuf\Internal\RepeatedField $blockRoots, \Google\Protobuf\Internal\RepeatedField $networks, string $root, string $status): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** |  |
| `$blockRoots` | **\Google\Protobuf\Internal\RepeatedField** |  |
| `$networks` | **\Google\Protobuf\Internal\RepeatedField** |  |
| `$root` | **string** |  |
| `$status` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Anchor $anchor): \Bloock\Entity\Integrity\Anchor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$anchor` | **\Bloock\Anchor** |  |





***

### getId

Gets id from the anchor.

```php
public getId(): int
```












***

### getBlockRoots

Gets block roots from the anchor.

```php
public getBlockRoots(): \Google\Protobuf\Internal\RepeatedField
```












***

### getNetworks

Gets networks from the anchor.

```php
public getNetworks(): \Google\Protobuf\Internal\RepeatedField
```












***

### getRoot

Gets root from the anchor.

```php
public getRoot(): string
```












***

### getStatus

Get status from the anchor.

```php
public getStatus(): string
```












***

### toProto



```php
public toProto(): \Bloock\Anchor
```












***


***
> Automatically generated on 2024-03-05
