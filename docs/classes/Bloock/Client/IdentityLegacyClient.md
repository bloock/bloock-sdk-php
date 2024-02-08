***

# IdentityLegacyClient





* Full name: `\Bloock\Client\IdentityLegacyClient`



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



```php
public __construct(\Bloock\ConfigData $config = null): mixed
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData** |  |





***

### createIdentity



```php
public createIdentity(): \Bloock\Entity\Identity\Identity
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.







***

### loadIdentity



```php
public loadIdentity(string $mnemonic): \Bloock\Entity\Identity\Identity
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mnemonic` | **string** |  |





***

### buildSchema



```php
public buildSchema(string $displayName, string $technicalName): \Bloock\Entity\Identity\SchemaBuilder
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$technicalName` | **string** |  |





***

### getSchema



```php
public getSchema(string $id): \Bloock\Entity\Identity\Schema
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |





***

### buildCredential



```php
public buildCredential(string $schemaId, string $holderKey): \Bloock\Entity\Identity\CredentialBuilder
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$schemaId` | **string** |  |
| `$holderKey` | **string** |  |





***

### getOffer



```php
public getOffer(string $id): \Bloock\Entity\Identity\CredentialOffer
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |





***

### waitOffer



```php
public waitOffer(string $offerId): \Bloock\Entity\Identity\CredentialOffer
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offerId` | **string** |  |





***

### redeemOffer



```php
public redeemOffer(\Bloock\Entity\Identity\CredentialOffer $offer, string $holderPrivateKey): \Bloock\Entity\Identity\Credential
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$offer` | **\Bloock\Entity\Identity\CredentialOffer** |  |
| `$holderPrivateKey` | **string** |  |





***

### verifyCredential



```php
public verifyCredential(\Bloock\Entity\Identity\Credential $credential): \Bloock\Entity\Identity\CredentialVerification
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credential` | **\Bloock\Entity\Identity\Credential** |  |





***

### revokeCredential



```php
public revokeCredential(\Bloock\Entity\Identity\Credential $credential): bool
```






* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.



**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$credential` | **\Bloock\Entity\Identity\Credential** |  |





***


***
> Automatically generated on 2024-02-07
