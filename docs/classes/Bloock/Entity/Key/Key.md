***

# Key

Represents a key entity that can be either a ManagedKey or a LocalKey.



* Full name: `\Bloock\Entity\Key\Key`



## Properties


### localKey



```php
public ?\Bloock\Entity\Key\LocalKey $localKey
```






***

### managedKey



```php
public ?\Bloock\Entity\Key\ManagedKey $managedKey
```






***

## Methods


### __construct

Creates a Key instance with a local or managed key.

```php
public __construct( $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\Key
```












***


***
> Automatically generated on 2024-04-16
