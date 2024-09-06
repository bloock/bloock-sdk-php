***

# IpnsKey

Represents an object with various key types.



* Full name: `\Bloock\Entity\Availability\IpnsKey`



## Properties


### managedKey



```php
public ?\Bloock\Entity\Key\ManagedKey $managedKey
```






***

### managedCertificate



```php
public ?\Bloock\Entity\Key\ManagedCertificate $managedCertificate
```






***

## Methods


### __construct

Creates an IpnsKey instance with a managed key.

```php
public __construct(mixed $key): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **mixed** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\IpnsKey
```












***


***
> Automatically generated on 2024-09-06
