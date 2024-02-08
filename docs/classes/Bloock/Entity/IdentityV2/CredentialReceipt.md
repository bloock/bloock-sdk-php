***

# CredentialReceipt

Represents a receipt for a credential, including the credential itself, its ID, and type.



* Full name: `\Bloock\Entity\IdentityV2\CredentialReceipt`



## Properties


### credential



```php
private \Bloock\Entity\IdentityV2\Credential $credential
```






***

### credentialId



```php
private string $credentialId
```






***

### credentialType



```php
private string $credentialType
```






***

## Methods


### __construct

Constructs an CredentialReceipt object with the specified parameters.

```php
public __construct(\Bloock\Entity\IdentityV2\Credential $credential, string $credentialId, string $credentialType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credential` | **\Bloock\Entity\IdentityV2\Credential** |  |
| `$credentialId` | **string** |  |
| `$credentialType` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialReceiptV2 $res): \Bloock\Entity\IdentityV2\CredentialReceipt
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialReceiptV2** |  |





***

### getCredential

Gets the credential object.

```php
public getCredential(): \Bloock\Entity\IdentityV2\Credential
```












***

### getCredentialId

Gets the ID associated with the credential.

```php
public getCredentialId(): string
```












***

### getCredentialType

Gets the type of the credential.

```php
public getCredentialType(): string
```












***

### toProto



```php
public toProto(): \Bloock\CredentialReceiptV2
```












***


***
> Automatically generated on 2024-02-07
