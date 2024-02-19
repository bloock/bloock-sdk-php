***

# KeyClient

Provides functionality to interact with the [Bloock Keys service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\KeyClient`



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

Creates a new KeyClient with the given configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### newLocalKey

Generates a new local key of the specified type.

```php
public newLocalKey(string $keyType): \Bloock\Entity\Key\LocalKey
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyType` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### loadLocalKey

Loads a local key of the specified type from a public key string.

```php
public loadLocalKey(string $keyType, string $key): \Bloock\Entity\Key\LocalKey
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyType` | **string** |  |
| `$key` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### newManagedKey

Generates a new managed key with the specified parameters.

```php
public newManagedKey(\Bloock\Entity\Key\ManagedKeyParams $params): \Bloock\Entity\Key\ManagedKey
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **\Bloock\Entity\Key\ManagedKeyParams** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### loadManagedKey

Loads a managed key by its ID (ex: 51d22546-68f1-4340-b94b-2a80e60b8933).

```php
public loadManagedKey(string $id): \Bloock\Entity\Key\ManagedKey
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### newLocalCertificate

Generates a new local certificate with the specified parameters.

```php
public newLocalCertificate(\Bloock\Entity\Key\LocalCertificateArgs $params): \Bloock\Entity\Key\LocalCertificate
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **\Bloock\Entity\Key\LocalCertificateArgs** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### loadLocalCertificate

Loads a local certificate from a PKCS12 file.

```php
public loadLocalCertificate(array $pkcs12, string $password): \Bloock\Entity\Key\LocalCertificate
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$pkcs12` | **array** |  |
| `$password` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### newManagedCertificate

Generates a new managed certificate with the specified parameters.

```php
public newManagedCertificate(\Bloock\Entity\Key\ManagedCertificateParams $params): \Bloock\Entity\Key\ManagedCertificate
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$params` | **\Bloock\Entity\Key\ManagedCertificateParams** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### loadManagedCertificate

Loads a managed certificate by its ID (ex: ceef5b02-af17-43d8-ae7b-31d9bdf8027f).

```php
public loadManagedCertificate(string $id): \Bloock\Entity\Key\ManagedCertificate
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### importManagedCertificate

Imports a managed certificate with the specified parameters, supported types: .pem, .pfx.

```php
public importManagedCertificate(string $certificateType, array $certificate, \Bloock\Entity\Key\ImportCertificateParams $params): \Bloock\Entity\Key\ManagedCertificate
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$certificateType` | **string** |  |
| `$certificate` | **array** |  |
| `$params` | **\Bloock\Entity\Key\ImportCertificateParams** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### setupTotpAccessControl

Sets up TOTP-based access control for the given managed key or managed certificate.

```php
public setupTotpAccessControl(\Bloock\Entity\Key\Managed $key): \Bloock\Entity\Key\TotpAccessControlReceipt
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\Bloock\Entity\Key\Managed** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### recoverTotpAccessControl

Recovers TOTP-based access control for the given managed key or managed certificate using a recovery code.

```php
public recoverTotpAccessControl(\Bloock\Entity\Key\Managed $key, string $code): \Bloock\Entity\Key\TotpAccessControlReceipt
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\Bloock\Entity\Key\Managed** |  |
| `$code` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### setupSecretAccessControl

Sets up secret-based access control for the given managed key or managed certificate.

```php
public setupSecretAccessControl(\Bloock\Entity\Key\Managed $key, string $secret, string $email): void
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **\Bloock\Entity\Key\Managed** |  |
| `$secret` | **string** |  |
| `$email` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-02-19
