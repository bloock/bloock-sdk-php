***

# EcdsaKeyPair

Represents an ecdsa key pair, with private and public key.



* Full name: `\Bloock\Entity\Key\EcdsaKeyPair`
* Parent class: [`\Bloock\Entity\Key\KeyPair`](./KeyPair.md)




## Methods


### __construct

Constructs a KeyPair object with the specified parameters.

```php
public __construct(string $publicKey, string $privateKey): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$publicKey` | **string** |  |
| `$privateKey` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\GenerateLocalKeyResponse $res): \Bloock\Entity\Key\EcdsaKeyPair
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\GenerateLocalKeyResponse** |  |





***


## Inherited methods


### __construct

Constructs a KeyPair object with the specified parameters.

```php
public __construct(string $publicKey, string $privateKey): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$publicKey` | **string** |  |
| `$privateKey` | **string** |  |





***

### getPublicKey

Gets the public key.

```php
public getPublicKey(): string
```












***

### getPrivateKey

Gets the private key.

```php
public getPrivateKey(): string
```












***


***
> Automatically generated on 2024-03-04
