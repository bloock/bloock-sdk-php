***

# SignatureJws

Represents a JSON Web Signature (JWS). [RFC 7515](https://datatracker.ietf.org/doc/html/rfc7515).



* Full name: `\Bloock\Entity\Authenticity\SignatureJws`



## Properties


### signature



```php
private string $signature
```






***

### protected



```php
private string $protected
```






***

### header



```php
private \Bloock\Entity\Authenticity\SignatureHeaderJws $header
```






***

### messageHash



```php
private string $messageHash
```






***

## Methods


### __construct

Constructs a SignatureJws object with the specified parameters.

```php
public __construct(string $signature, string $protected, \Bloock\Entity\Authenticity\SignatureHeaderJws $signatureHeader, string $messageHash): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signature` | **string** |  |
| `$protected` | **string** |  |
| `$signatureHeader` | **\Bloock\Entity\Authenticity\SignatureHeaderJws** |  |
| `$messageHash` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\SignatureJWS $signature): \Bloock\Entity\Authenticity\SignatureJws
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signature` | **\Bloock\SignatureJWS** |  |





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

### getProtected

Gets the "protected" header parameter of the JWS.

```php
public getProtected(): string
```












***

### getHeader

Gets the header containing algorithm and key identifier metadata for the JWS.

```php
public getHeader(): \Bloock\Entity\Authenticity\SignatureHeaderJws
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

### toProto



```php
public toProto(): \Bloock\SignatureJWS
```












***

### getAlg

Gets the algorithm used for the JWS signature.

```php
public getAlg(): string
```












***


***
> Automatically generated on 2024-02-21
