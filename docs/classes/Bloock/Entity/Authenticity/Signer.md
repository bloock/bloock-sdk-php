***

# Signer

Represents a signer with various key types and additional configurations.



* Full name: `\Bloock\Entity\Authenticity\Signer`



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

### hashAlg



```php
public ?string $hashAlg
```






***

### accessControl



```php
public ?\Bloock\Entity\Key\AccessControl $accessControl
```






***

## Methods


### __construct

Creates a Signer instance with a local key, managed key, local certificate or managed certificate.

```php
public __construct( $key, string|null $hashAlg = null, \Bloock\Entity\Key\AccessControl|null $accessControl = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **** |  |
| `$hashAlg` | **string&#124;null** |  |
| `$accessControl` | **\Bloock\Entity\Key\AccessControl&#124;null** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\Signer
```












***


***
> Automatically generated on 2024-02-19
