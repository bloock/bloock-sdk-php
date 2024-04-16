***

# SubjectCertificateParams

Represents parameters for generating a subject certificate.



* Full name: `\Bloock\Entity\Key\SubjectCertificateParams`



## Properties


### commonName

Is the common name (CN) for the certificate. Required.

```php
public string $commonName
```






***

### organization

Is the organization (O) for the certificate. (Optional)

```php
public string|null $organization
```






***

### organizationUnit

Is the organizational unit (OU) for the certificate. (Optional)

```php
public string|null $organizationUnit
```






***

### location

Is the location (L) for the certificate. (Optional)

```php
public string|null $location
```






***

### state

Is the state or province (ST) for the certificate. (Optional)

```php
public string|null $state
```






***

### country

Is the country (C) for the certificate. (Optional)

```php
public string|null $country
```






***

## Methods


### __construct

Constructs a SubjectCertificateParams object with the specified parameters.

```php
public __construct(string $commonName, string|null $organization = null, string|null $organizationUnit = null, string|null $location = null, string|null $state = null, string|null $country = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$commonName` | **string** |  |
| `$organization` | **string&#124;null** |  |
| `$organizationUnit` | **string&#124;null** |  |
| `$location` | **string&#124;null** |  |
| `$state` | **string&#124;null** |  |
| `$country` | **string&#124;null** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CertificateSubject $res): \Bloock\Entity\Key\SubjectCertificateParams
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CertificateSubject** |  |





***

### toProto



```php
public toProto(): \Bloock\CertificateSubject
```












***


***
> Automatically generated on 2024-04-16
