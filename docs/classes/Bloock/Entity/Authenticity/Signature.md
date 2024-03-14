***

# Signature

Represents a cryptographic signature along with additional metadata.



* Full name: `\Bloock\Entity\Authenticity\Signature`



## Properties


### signature

Is the cryptographic signature.

```php
private string $signature
```






***

### alg

Is the algorithm used for the signature.

```php
private string $alg
```






***

### kid

Is the key identifier associated with the signature. (public key or key ID).

```php
private string $kid
```






***

### messageHash

Is the hash of the message that was signed.

```php
private string $messageHash
```






***

### subject

Is an optional field representing the subject of the signature.

```php
private string $subject
```






***

## Methods


### __construct

Constructs a Signature object with the specified parameters.

```php
public __construct(string $signature, string $alg, string $kid, string $messageHash, string $subject): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signature` | **string** |  |
| `$alg` | **string** |  |
| `$kid` | **string** |  |
| `$messageHash` | **string** |  |
| `$subject` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Signature $signature): \Bloock\Entity\Authenticity\Signature
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signature` | **\Bloock\Signature** |  |





***

### getSignature

Gets the cryptographic signature.

```php
public getSignature(): string
```












***

### setSignature

Sets the cryptographic signature.

```php
public setSignature(string $signature): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signature` | **string** |  |





***

### getKid

Gets the key identifier associated with the signature. (public key or key ID).

```php
public getKid(): string
```












***

### getMessageHash

Gets the signature message hash.

```php
public getMessageHash(): string
```












***

### setMessageHash

Sets the hash of the message that was signed.

```php
public setMessageHash(string $messageHash): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$messageHash` | **string** |  |





***

### getSubject

Gets the subject of the signature.

```php
public getSubject(): string
```












***

### setSubject

Sets the subject of the signature.

```php
public setSubject(string $subject): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$subject` | **string** |  |





***

### toProto



```php
public toProto(): \Bloock\Signature
```












***

### getAlg

Returns the SignatureAlg based on the algorithm specified in the Alg field.

```php
public getAlg(): string
```












***


***
> Automatically generated on 2024-03-14
