***

# SignatureHeaderJws

Represents the header of a JSON Web Signature (JWS). [RFC 7515](https://datatracker.ietf.org/doc/html/rfc7515).



* Full name: `\Bloock\Entity\Authenticity\SignatureHeaderJws`



## Properties


### alg



```php
private string $alg
```






***

### kid



```php
private string $kid
```






***

## Methods


### __construct

Constructs a SignatureHeaderJws object with the specified algorithm and key identifier.

```php
public __construct(string $alg, string $kid): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alg` | **string** |  |
| `$kid` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\SignatureHeaderJWS $header): \Bloock\Entity\Authenticity\SignatureHeaderJws
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$header` | **\Bloock\SignatureHeaderJWS** |  |





***

### getAlg

Gets the algorithm used for the JWS signature.

```php
public getAlg(): string
```












***

### getKid

Gets the key identifier associated with the JWS signature.

```php
public getKid(): string
```












***

### toProto



```php
public toProto(): \Bloock\SignatureHeaderJWS
```












***


***
> Automatically generated on 2024-04-17
