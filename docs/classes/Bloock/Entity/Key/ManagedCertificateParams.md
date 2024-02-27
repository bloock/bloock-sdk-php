***

# ManagedCertificateParams

Represents parameters for creating a managed certificate.



* Full name: `\Bloock\Entity\Key\ManagedCertificateParams`



## Properties


### keyType

Is the type of the key.

```php
public string $keyType
```






***

### subjectParams

Represents the subject details of the certificate.

```php
public \Bloock\Entity\Key\SubjectCertficateParams $subjectParams
```






***

### expiration

Is the number of months until the certificate expiration.

```php
public int $expiration
```






***

## Methods


### __construct

Constructs a ManagedCertificateParams object with the specified parameters.

```php
public __construct(string $keyType, \Bloock\Entity\Key\SubjectCertificateParams $params, int $expiration): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyType` | **string** |  |
| `$params` | **\Bloock\Entity\Key\SubjectCertificateParams** |  |
| `$expiration` | **int** |  |





***

### fromProto



```php
public static fromProto(\Bloock\ManagedCertificateParams $res): \Bloock\Entity\Key\ManagedCertificateParams
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\ManagedCertificateParams** |  |





***

### toProto



```php
public toProto(): \Bloock\ManagedCertificateParams
```












***


***
> Automatically generated on 2024-02-26
