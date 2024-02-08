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

### createIdentity

Creates a new identity.

```php
public createIdentity(\Bloock\Entity\IdentityV2\IdentityKey $identityKey, \Bloock\Entity\IdentityV2\DidParams|null $didParams = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$identityKey` | **\Bloock\Entity\IdentityV2\IdentityKey** |  |
| `$didParams` | **\Bloock\Entity\IdentityV2\DidParams&#124;null** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### createIssuer

Creates a new issuer on the Bloock Identity service.

```php
public createIssuer(\Bloock\Entity\IdentityV2\IdentityKey $issuerKey, int $publishInterval, \Bloock\Entity\IdentityV2\DidParams|null $didParams = null, string|null $name = null, string|null $description = null, string|null $image = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuerKey` | **\Bloock\Entity\IdentityV2\IdentityKey** |  |
| `$publishInterval` | **int** |  |
| `$didParams` | **\Bloock\Entity\IdentityV2\DidParams&#124;null** |  |
| `$name` | **string&#124;null** |  |
| `$description` | **string&#124;null** |  |
| `$image` | **string&#124;null** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getIssuerByKey

Gets the DID of an issuer based on the issuer key.

```php
public getIssuerByKey(\Bloock\Entity\IdentityV2\IdentityKey $issuerKey, \Bloock\Entity\IdentityV2\DidParams|null $didParams = null): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuerKey` | **\Bloock\Entity\IdentityV2\IdentityKey** |  |
| `$didParams` | **\Bloock\Entity\IdentityV2\DidParams&#124;null** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### buildSchema

Creates a new schema builder for defining a schema on the Bloock Identity service.

```php
public buildSchema(string $displayName, string $schemaType, string $version, string $description): \Bloock\Entity\IdentityV2\SchemaBuilder
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
public getSchema(string $id): \Bloock\Entity\IdentityV2\Schema
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
public buildCredential(string $schemaId, string $issuerDid, string $holderDid, int $expiration, int $version): \Bloock\Entity\IdentityV2\CredentialBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaId` | **string** |  |
| `$issuerDid` | **string** |  |
| `$holderDid` | **string** |  |
| `$expiration` | **int** |  |
| `$version` | **int** |  |





***

### publishIssuerState

Publishes the state of an issuer on the Bloock Identity service.

```php
public publishIssuerState(string $issuerDid, \Bloock\Entity\Authenticity\Signer $signer): \Bloock\Entity\IdentityV2\IssuerStateReceipt
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$issuerDid` | **string** |  |
| `$signer` | **\Bloock\Entity\Authenticity\Signer** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getCredentialProof

Gets the proof of a credential on the Bloock Identity service.

```php
public getCredentialProof(string $issuerDid, string $credentialId): \Bloock\Entity\IdentityV2\CredentialProof
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
public revokeCredential(\Bloock\Entity\IdentityV2\Credential $credential, \Bloock\Entity\Authenticity\Signer $signer): bool
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credential` | **\Bloock\Entity\IdentityV2\Credential** |  |
| `$signer` | **\Bloock\Entity\Authenticity\Signer** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### createVerification

Creates a new verification session on the identity managed API provided.

```php
public createVerification(string $proofRequest): \Bloock\Entity\IdentityV2\VerificationReceipt
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
> Automatically generated on 2024-02-07
