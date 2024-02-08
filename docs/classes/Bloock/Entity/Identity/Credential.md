***

# Credential





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



```php
public __construct(\Google\Protobuf\Internal\RepeatedField $context, string $id, \Google\Protobuf\Internal\RepeatedField $type, string $issuanceDate,  $credentialSubject, \Bloock\Entity\Identity\CredentialStatus $credentialStatus, string $issuer, \Bloock\Entity\Identity\CredentialSchema $credentialSchema, \Bloock\Entity\Identity\CredentialProof $credentialProof): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$context` | **\Google\Protobuf\Internal\RepeatedField** |  |
| `$id` | **string** |  |
| `$type` | **\Google\Protobuf\Internal\RepeatedField** |  |
| `$issuanceDate` | **string** |  |
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



```php
public static fromJson(string $json): \Bloock\Entity\Identity\Credential
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |





***

### toJson



```php
public toJson(): string
```












***

### getContext



```php
public getContext(): \Google\Protobuf\Internal\RepeatedField
```












***

### getId



```php
public getId(): string
```












***

### getType



```php
public getType(): \Google\Protobuf\Internal\RepeatedField
```












***

### getIssuanceDate



```php
public getIssuanceDate(): string
```












***

### getCredentialSubject



```php
public getCredentialSubject(): mixed
```












***

### getCredentialStatus



```php
public getCredentialStatus(): \Bloock\Entity\Identity\CredentialStatus
```












***

### getIssuer



```php
public getIssuer(): string
```












***

### getCredentialSchema



```php
public getCredentialSchema(): \Bloock\Entity\Identity\CredentialSchema
```












***

### toProto



```php
public toProto(): \Bloock\Credential
```












***

### getCredentialProof



```php
public getCredentialProof(): \Bloock\Entity\Identity\CredentialProof
```












***


***
> Automatically generated on 2024-02-07
