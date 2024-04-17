***

# Encrypter

Represents an encryption configuration with various key types and access control.



* Full name: `\Bloock\Entity\Encryption\Encrypter`



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

### managedCertificate



```php
public ?\Bloock\Entity\Key\ManagedCertificate $managedCertificate
```






***

### localCertificate



```php
public ?\Bloock\Entity\Key\LocalCertificate $localCertificate
```






***

### accessControl



```php
public ?\Bloock\Entity\Key\AccessControl $accessControl
```






***

## Methods


### __construct

Creates a new Encrypter instance with a local key, managed key, local certificate or managed certificate.

```php
public __construct( $key, \Bloock\Entity\Key\AccessControl|null $accessControl = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$accessControl` | **\Bloock\Entity\Key\AccessControl&#124;null** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\Encrypter
```












***


***
> Automatically generated on 2024-04-17
