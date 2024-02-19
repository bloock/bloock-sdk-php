***

# DidType

Represents parameters used for generating DIDs.



* Full name: `\Bloock\Entity\Identity\DidType`



## Properties


### method



```php
private ?string $method
```






***

### blockchain



```php
private ?string $blockchain
```






***

### network



```php
private ?string $network
```






***

## Methods


### __construct

Constructs a DidType object with the specified parameters.

```php
public __construct(string|null $method = null, string|null $blockchain = null, string|null $network = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$method` | **string&#124;null** |  |
| `$blockchain` | **string&#124;null** |  |
| `$network` | **string&#124;null** |  |





***

### toProto



```php
public toProto(): \Bloock\DidType
```












***


***
> Automatically generated on 2024-02-19
