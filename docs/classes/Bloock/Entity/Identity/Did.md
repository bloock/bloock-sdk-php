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

### didType



```php
private \Bloock\Entity\Identity\DidType $didType
```






***

## Methods


### __construct

Returns a new instance of Did for the given parameters.

```php
public __construct(string $did, \Bloock\Entity\Identity\DidType $didType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$did` | **string** |  |
| `$didType` | **\Bloock\Entity\Identity\DidType** |  |





***

### getDid

Gets the raw did identifier.

```php
public getDid(): string
```












***

### getDidType

Gets the did type.

```php
public getDidType(): \Bloock\Entity\Identity\DidType
```












***


***
> Automatically generated on 2024-02-19
