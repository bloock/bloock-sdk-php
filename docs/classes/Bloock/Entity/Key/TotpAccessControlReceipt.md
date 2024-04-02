***

# TotpAccessControlReceipt

Represents a receipt for a Time-based One-Time Password (TOTP) access control.



* Full name: `\Bloock\Entity\Key\TotpAccessControlReceipt`



## Properties


### secret



```php
public string $secret
```






***

### secretQr



```php
public string $secretQr
```






***

### recoveryCodes



```php
public \Google\Protobuf\Internal\RepeatedField $recoveryCodes
```






***

## Methods


### __construct

Creates a new TotpAccessControlReceipt with the provided secret, secret QR code, and recovery codes.

```php
public __construct(string $secret, string $secretQr, \Google\Protobuf\Internal\RepeatedField $recoveryCodes): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$secret` | **string** |  |
| `$secretQr` | **string** |  |
| `$recoveryCodes` | **\Google\Protobuf\Internal\RepeatedField** |  |





***

### getSecret

Gets the secret of the totp access control receipt.

```php
public getSecret(): string
```












***

### getSecretQr

Gets the secret qr of the totp access control receipt.

```php
public getSecretQr(): string
```












***

### getRecoveryCodes

Gets the recovery codes of the totp access control receipt.

```php
public getRecoveryCodes(): \Google\Protobuf\Internal\RepeatedField
```












***


***
> Automatically generated on 2024-04-02
