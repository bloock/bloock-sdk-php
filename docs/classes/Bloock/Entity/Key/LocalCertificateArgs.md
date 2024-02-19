***

# LocalCertificateArgs

Represents the parameters for generating a local certificate.



* Full name: `\Bloock\Entity\Key\LocalCertificateArgs`



## Properties


### keyType



```php
public string $keyType
```






***

### subjectParams



```php
public \Bloock\Entity\Key\SubjectCertificateParams $subjectParams
```






***

### password



```php
public string $password
```






***

### expiration



```php
public int $expiration
```






***

## Methods


### __construct

Constructs an LocalCertificateParams object with the specified parameters.

```php
public __construct(string $keyType, \Bloock\Entity\Key\SubjectCertificateParams $params, string $password, int $expiration): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyType` | **string** |  |
| `$params` | **\Bloock\Entity\Key\SubjectCertificateParams** |  |
| `$password` | **string** |  |
| `$expiration` | **int** |  |





***

### fromProto



```php
public static fromProto(\Bloock\LocalCertificateParams $res): \Bloock\Entity\Key\LocalCertificateArgs
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\LocalCertificateParams** |  |





***

### toProto



```php
public toProto(): \Bloock\LocalCertificateParams
```












***


***
> Automatically generated on 2024-02-19
