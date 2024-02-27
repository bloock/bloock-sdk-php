***

# LocalCertificate

Represents a local certificate along with its password.



* Full name: `\Bloock\Entity\Key\LocalCertificate`



## Properties


### pkcs12



```php
public array $pkcs12
```






***

### password



```php
public string $password
```






***

## Methods


### __construct

Constructs a LocalCertificate object with the specified parameters.

```php
public __construct(array $pkcs12, string $password): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pkcs12` | **array** |  |
| `$password` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\LocalCertificate $res): \Bloock\Entity\Key\LocalCertificate
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\LocalCertificate** |  |





***

### toProto



```php
public toProto(): \Bloock\LocalCertificate
```












***


***
> Automatically generated on 2024-02-26
