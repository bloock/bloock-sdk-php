***

# IdentityClient

Represents a client for interacting with the [Bloock Identity service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\IdentityClient`



## Properties


### bridge



```php
private $bridge
```






***

### config



```php
private $config
```






***

## Methods


### __construct

Creates a new instance of the IdentityClient with the provided configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### createHolder

Creates a new holder identity.

```php
public createHolder(\Bloock\Entity\Key\Key $holderKey, string $didMethod): \Bloock\Entity\Identity\Holder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$holderKey` | **\Bloock\Entity\Key\Key** |  |
| `$didMethod` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### createIssuer

Creates a new issuer on the Bloock Identity service.

```php
public createIssuer(\Bloock\Entity\Key\Key $issuerKey, int $publishInterval, string $didMethod, string|null $name = null, string|null $description = null, string|null $image = null): \Bloock\Entity\Identity\Issuer
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuerKey` | **\Bloock\Entity\Key\Key** |  |
| `$publishInterval` | **int** |  |
| `$didMethod` | **string** |  |
| `$name` | **string&#124;null** |  |
| `$description` | **string&#124;null** |  |
| `$image` | **string&#124;null** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### importIssuer

Gets the issuer based on the issuer key and DID method.

```php
public importIssuer(\Bloock\Entity\Key\Key $issuerKey, string $didMethod): \Bloock\Entity\Identity\Issuer
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuerKey` | **\Bloock\Entity\Key\Key** |  |
| `$didMethod` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### buildSchema

Creates a new schema builder for defining a schema on the Bloock Identity service.

```php
public buildSchema(string $displayName, string $schemaType, string $version, string $description): \Bloock\Entity\Identity\SchemaBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$schemaType` | **string** |  |
| `$version` | **string** |  |
| `$description` | **string** |  |





***

### getSchema

Gets a schema from the Bloock Identity service based on the schema ID (ex: Qma1t4uzbnB93E4rasNdu5UWMDh5qg3wMkPm68cnEyfnoM).

```php
public getSchema(string $id): \Bloock\Entity\Identity\Schema
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### buildCredential

Creates a new credential builder for defining a credential on the Bloock Identity service.

```php
public buildCredential(\Bloock\Entity\Identity\Issuer $issuer, string $schemaId, string $holderDid, int $expiration, int $version): \Bloock\Entity\Identity\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuer` | **\Bloock\Entity\Identity\Issuer** |  |
| `$schemaId` | **string** |  |
| `$holderDid` | **string** |  |
| `$expiration` | **int** |  |
| `$version` | **int** |  |





***

### getCredential

Retrieves the Verifiable Credential entity based on the credential ID (UUID). (ex: 1bf0c79e-55e6-4f14-aa9d-fb55619ba0cf)

```php
public getCredential(string $credentialId): \Bloock\Entity\Identity\Credential
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credentialId` | **string** |  |





***

### getCredentialOffer

Retrieves the json raw offer based on the credential ID (UUID). (ex: 1bf0c79e-55e6-4f14-aa9d-fb55619ba0cf)

```php
public getCredentialOffer(\Bloock\Entity\Identity\Issuer $issuer, string $credentialId): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuer` | **\Bloock\Entity\Identity\Issuer** |  |
| `$credentialId` | **string** |  |





***

### forcePublishIssuerState

Publishes the state of an issuer on the Bloock Identity service.

```php
public forcePublishIssuerState(\Bloock\Entity\Identity\Issuer $issuer): \Bloock\Entity\Identity\IssuerStateReceipt
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuer` | **\Bloock\Entity\Identity\Issuer** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getCredentialProof

Gets the proof of a credential on the Bloock Identity service.

```php
public getCredentialProof(string $issuerDid, string $credentialId): \Bloock\Entity\Identity\CredentialProof
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuerDid` | **string** |  |
| `$credentialId` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### revokeCredential

Revokes a credential on the Bloock Identity service.

```php
public revokeCredential(\Bloock\Entity\Identity\Credential $credential, \Bloock\Entity\Identity\Issuer $issuer): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credential` | **\Bloock\Entity\Identity\Credential** |  |
| `$issuer` | **\Bloock\Entity\Identity\Issuer** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### createVerification

Creates a new verification session on the identity managed API provided.

```php
public createVerification(string $proofRequest): \Bloock\Entity\Identity\VerificationReceipt
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$proofRequest` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### waitVerification

Waits for the completion of a verification session on the identity managed API provided.

```php
public waitVerification(int $sessionID, int $timeout = 120000): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionID` | **int** |  |
| `$timeout` | **int** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getVerificationStatus

Gets the status of a verification session on the identity managed API provided.

```php
public getVerificationStatus(int $sessionID): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$sessionID` | **int** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-02-26
