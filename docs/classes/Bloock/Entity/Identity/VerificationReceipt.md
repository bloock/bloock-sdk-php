***

# VerificationReceipt

Represents a receipt for a verification session.



* Full name: `\Bloock\Entity\Identity\VerificationReceipt`



## Properties


### sessionID



```php
private int $sessionID
```






***

### verificationRequest



```php
private string $verificationRequest
```






***

## Methods


### __construct

Constructs a VerificationReceipt object with the specified parameters.

```php
public __construct(int $sessionID, string $verificationRequest): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionID` | **int** |  |
| `$verificationRequest` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\VerificationReceipt $res): \Bloock\Entity\Identity\VerificationReceipt
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\VerificationReceipt** |  |





***

### getSessionID

Gets the session id of the verification.

```php
public getSessionID(): int
```












***

### getVerificationRequest

Gets the verification request json.

```php
public getVerificationRequest(): string
```












***

### toProto



```php
public toProto(): \Bloock\VerificationReceipt
```












***


***
> Automatically generated on 2024-02-19
