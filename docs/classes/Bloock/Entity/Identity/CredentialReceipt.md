***

# CredentialReceipt

Represents a receipt for a credential, including the credential itself, its ID, and type.



* Full name: `\Bloock\Entity\Identity\CredentialReceipt`



## Properties


### credential



```php
private \Bloock\Entity\Identity\Credential $credential
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
public __construct(\Bloock\Entity\Identity\Credential $credential, string $credentialId, string $credentialType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credential` | **\Bloock\Entity\Identity\Credential** |  |
| `$credentialId` | **string** |  |
| `$credentialType` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialReceipt $res): \Bloock\Entity\Identity\CredentialReceipt
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialReceipt** |  |





***

### getCredential

Gets the credential object.

```php
public getCredential(): \Bloock\Entity\Identity\Credential
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
public toProto(): \Bloock\CredentialReceipt
```












***


***
> Automatically generated on 2024-02-26
