***

# Did

Represents a DID.



* Full name: `\Bloock\Entity\Identity\Did`



## Properties


### did



```php
private string $did
```






***

### didMethod



```php
private \Bloock\Entity\Identity\DidMethod $didMethod
```






***

## Methods


### __construct

Returns a new instance of Did for the given parameters.

```php
public __construct(string $did, \Bloock\Entity\Identity\DidMethod $didMethod): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$did` | **string** |  |
| `$didMethod` | **\Bloock\Entity\Identity\DidMethod** |  |





***

### getDid

Gets the raw did identifier.

```php
public getDid(): string
```












***

### getDidMethod

Gets the did method.

```php
public getDidMethod(): \Bloock\Entity\Identity\DidMethod
```












***


***
> Automatically generated on 2024-02-29
