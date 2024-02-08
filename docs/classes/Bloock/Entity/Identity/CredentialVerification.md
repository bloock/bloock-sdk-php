***

# CredentialVerification





* Full name: `\Bloock\Entity\Identity\CredentialVerification`



## Properties


### timestamp



```php
private int $timestamp
```






***

### issuer



```php
private string $issuer
```






***

### revocation



```php
private int $revocation
```






***

## Methods


### __construct



```php
public __construct(int $timestamp, string $issuer, int $revocation): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$timestamp` | **int** |  |
| `$issuer` | **string** |  |
| `$revocation` | **int** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialVerification $res): \Bloock\Entity\Identity\CredentialVerification
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialVerification** |  |





***

### getTimestamp



```php
public getTimestamp(): int
```












***

### getIssuer



```php
public getIssuer(): string
```












***

### getRevocation



```php
public getRevocation(): int
```












***

### toProto



```php
public toProto(): \Bloock\CredentialVerification
```












***


***
> Automatically generated on 2024-02-07
