***

# CredentialProof





* Full name: `\Bloock\Entity\Identity\CredentialProof`



## Properties


### bloockProof



```php
private \Bloock\Entity\Integrity\Proof $bloockProof
```






***

### signatureProof



```php
private \Bloock\Entity\Authenticity\SignatureJws $signatureProof
```






***

## Methods


### __construct



```php
public __construct(\Bloock\Entity\Integrity\Proof $bloockProof, \Bloock\Entity\Authenticity\SignatureJws $signatureProof): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bloockProof` | **\Bloock\Entity\Integrity\Proof** |  |
| `$signatureProof` | **\Bloock\Entity\Authenticity\SignatureJws** |  |





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

### getBloockProof



```php
public getBloockProof(): \Bloock\Entity\Integrity\Proof
```












***

### getSignatureProof



```php
public getSignatureProof(): \Bloock\Entity\Authenticity\SignatureJws
```












***

### toProto



```php
public toProto(): \Bloock\CredentialProof
```












***


***
> Automatically generated on 2024-02-07
