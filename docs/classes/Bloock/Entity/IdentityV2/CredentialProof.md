***

# CredentialProof

Represents the proof associated with a credential, including signature and sparse merkle tree proof.



* Full name: `\Bloock\Entity\IdentityV2\CredentialProof`



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
public static fromProto(\Bloock\CredentialProofV2 $res): \Bloock\Entity\IdentityV2\CredentialProof
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialProofV2** |  |





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
public toProto(): \Bloock\CredentialProofV2
```












***


***
> Automatically generated on 2024-02-07
