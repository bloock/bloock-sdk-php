***

# ManagedCertificate

Represents a managed certificate with its details.



* Full name: `\Bloock\Entity\Key\ManagedCertificate`



## Properties


### id

Is the identifier of the managed certificate (ex: 2abae00b-f3d9-410c-abdf-1ea391d633aa).

```php
public string $id
```






***

### protection

Is the protection level for the key.

```php
public string $protection
```






***

### keyType

Is the type of the key.

```php
public string $keyType
```






***

### expiration

Is the timestamp indicating when the certificate expires.

```php
public int|null $expiration
```






***

### key

Is the certificate public key.

```php
public string $key
```






***

### accessControlType

Is the access control type for the key.

```php
public string $accessControlType
```






***

## Methods


### __construct

Constructs a ManagedCertificate object with the specified parameters.

```php
public __construct(string $id, string $protection, string $keyType, int|null $expiration, string $key, string $accessControlType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$protection` | **string** |  |
| `$keyType` | **string** |  |
| `$expiration` | **int&#124;null** |  |
| `$key` | **string** |  |
| `$accessControlType` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\ManagedCertificate $res): \Bloock\Entity\Key\ManagedCertificate
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\ManagedCertificate** |  |





***

### toProto



```php
public toProto(): \Bloock\ManagedCertificate
```












***


***
> Automatically generated on 2024-03-28
