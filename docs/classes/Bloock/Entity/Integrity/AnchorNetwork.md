***

# AnchorNetwork

Represents information about an anchor network.



* Full name: `\Bloock\Entity\Integrity\AnchorNetwork`



## Properties


### name



```php
private string $name
```






***

### state



```php
private string $state
```






***

### txHash



```php
private string $txHash
```






***

### root



```php
private ?string $root
```






***

## Methods


### __construct

Constructs an AnchorNetwork object with the specified parameters.

```php
public __construct(string $name, string $state, string $txHash, string|null $root): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$state` | **string** |  |
| `$txHash` | **string** |  |
| `$root` | **string&#124;null** |  |





***

### fromProto



```php
public static fromProto(\Bloock\AnchorNetwork $network): \Bloock\Entity\Integrity\AnchorNetwork
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$network` | **\Bloock\AnchorNetwork** |  |





***

### getName

Gets name of the anchor network.

```php
public getName(): string
```












***

### getState

Gets state of the anchor network.

```php
public getState(): string
```












***

### getTxHash

Gets transaction hash of the anchor network.

```php
public getTxHash(): string
```












***

### getRoot

Gets root of the anchor network.

```php
public getRoot(): string
```












***

### toProto



```php
public toProto(): \Bloock\AnchorNetwork
```












***


***
> Automatically generated on 2024-04-16
