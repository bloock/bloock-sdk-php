***

# CredentialStatus





* Full name: `\Bloock\Entity\Identity\CredentialStatus`



## Properties


### id



```php
private string $id
```






***

### revocationNonce



```php
private int $revocationNonce
```






***

### type



```php
private string $type
```






***

## Methods


### __construct



```php
public __construct(string $id, int $revocationNonce, string $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$revocationNonce` | **int** |  |
| `$type` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialStatus $res): \Bloock\Entity\Identity\CredentialStatus
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialStatus** |  |





***

### getId



```php
public getId(): string
```












***

### getRevocationNonce



```php
public getRevocationNonce(): int
```












***

### getType



```php
public getType(): string
```












***

### toProto



```php
public toProto(): \Bloock\CredentialStatus
```












***


***
> Automatically generated on 2024-02-07
