***

# CredentialProof

Represents the proof associated with a credential, including signature and sparse merkle tree proof.



* Full name: `\Bloock\Entity\Identity\CredentialProof`



## Properties


### signatureProof



```php
private string $signatureProof
```






***

### sparseMtProof



```php
private string $sparseMtProof
```






***

## Methods


### __construct

Constructs an CredentialProof object with the specified parameters.

```php
public __construct(string $signatureProof, string $sparseMtProof): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signatureProof` | **string** |  |
| `$sparseMtProof` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialProof $res): \Bloock\Entity\Identity\CredentialProof
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialProof** |  |





***

### getSignatureProof

Retrieve signature proof with string format

```php
public getSignatureProof(): string
```












***

### getSparseMtProof

Retrieve sparse merkle tree proof with string format

```php
public getSparseMtProof(): string
```












***

### toProto



```php
public toProto(): \Bloock\CredentialProof
```












***


***
> Automatically generated on 2024-02-26
