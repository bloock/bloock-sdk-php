***

# Credential

Represents a verifiable credential with its associated information. [Verifiable Credentials Data Model v2.0](https://www.w3.org/TR/vc-data-model-2.0/).



* Full name: `\Bloock\Entity\Identity\Credential`



## Properties


### context



```php
private \Google\Protobuf\Internal\RepeatedField $context
```






***

### id



```php
private string $id
```






***

### type



```php
private \Google\Protobuf\Internal\RepeatedField $type
```






***

### issuanceDate



```php
private string $issuanceDate
```






***

### expiration



```php
private string $expiration
```






***

### credentialSubject



```php
private $credentialSubject
```






***

### credentialStatus



```php
private \Bloock\Entity\Identity\CredentialStatus $credentialStatus
```






***

### issuer



```php
private string $issuer
```






***

### credentialSchema



```php
private \Bloock\Entity\Identity\CredentialSchema $credentialSchema
```






***

### credentialProof



```php
private \Bloock\Entity\Identity\CredentialProof $credentialProof
```






***

## Methods


### __construct

Creates a new Credential instance with the provided details.

```php
public __construct(\Google\Protobuf\Internal\RepeatedField $context, string $id, \Google\Protobuf\Internal\RepeatedField $type, string $issuanceDate, string $expiration,  $credentialSubject, \Bloock\Entity\Identity\CredentialStatus $credentialStatus, string $issuer, \Bloock\Entity\Identity\CredentialSchema $credentialSchema, \Bloock\Entity\Identity\CredentialProof $credentialProof): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Google\Protobuf\Internal\RepeatedField** |  |
| `$id` | **string** |  |
| `$type` | **\Google\Protobuf\Internal\RepeatedField** |  |
| `$issuanceDate` | **string** |  |
| `$expiration` | **string** |  |
| `$credentialSubject` | **** |  |
| `$credentialStatus` | **\Bloock\Entity\Identity\CredentialStatus** |  |
| `$issuer` | **string** |  |
| `$credentialSchema` | **\Bloock\Entity\Identity\CredentialSchema** |  |
| `$credentialProof` | **\Bloock\Entity\Identity\CredentialProof** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Credential $res): \Bloock\Entity\Identity\Credential
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\Credential** |  |





***

### fromJson

Creates a Credential instance from a JSON string representation.

```php
public static fromJson(string $json): \Bloock\Entity\Identity\Credential
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toJson

Converts the Credential instance to its JSON string representation.

```php
public toJson(): string
```











**Throws:**

- [`Exception`](../../../Exception.md)



***

### getContext

Gets the context associated with the credential.

```php
public getContext(): \Google\Protobuf\Internal\RepeatedField
```












***

### getId

Gets the ID associated with the credential.

```php
public getId(): string
```












***

### getType

Gets the types associated with the credential.

```php
public getType(): \Google\Protobuf\Internal\RepeatedField
```












***

### getIssuanceDate

Gets the issuance date of the credential.

```php
public getIssuanceDate(): string
```












***

### getExpiration

Gets the expiration date of the credential.

```php
public getExpiration(): string
```












***

### getCredentialSubject

Gets the subject of the credential.

```php
public getCredentialSubject(): mixed
```












***

### getCredentialStatus

Gets the status of the credential.

```php
public getCredentialStatus(): \Bloock\Entity\Identity\CredentialStatus
```












***

### getIssuer

Gets the issuer of the credential.

```php
public getIssuer(): string
```












***

### getCredentialSchema

Gets the schema associated with the credential.

```php
public getCredentialSchema(): \Bloock\Entity\Identity\CredentialSchema
```












***

### getCredentialProof

Gets the proof associated with the credential.

```php
public getCredentialProof(): \Bloock\Entity\Identity\CredentialProof
```












***

### toProto



```php
public toProto(): \Bloock\Credential
```












***


***
> Automatically generated on 2024-04-17
