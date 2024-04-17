***

# IntegrityClient

Provides functionality to interact with the [Bloock Integrity service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\IntegrityClient`



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

Creates a new IntegrityClient with the given configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### sendRecords

Sends records to the Bloock Integrity service for certification.

```php
public sendRecords(array $records): array
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### waitAnchor

Gets an anchor by its ID from the Bloock Integrity service.

```php
public waitAnchor(int $id, int $timeout = 120000): \Bloock\Entity\Integrity\Anchor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** |  |
| `$timeout` | **int** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getAnchor

Waits for the completion of an anchor on the Bloock Integrity service.

```php
public getAnchor(int $id): \Bloock\Entity\Integrity\Anchor
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **int** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### getProof

Gets a proof for a set of records from the Bloock Integrity service.

```php
public getProof(array $records): \Bloock\Entity\Integrity\Proof
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### verifyProof

Verifies the integrity of a proof.

```php
public verifyProof(\Bloock\Entity\Integrity\Proof $proof): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$proof` | **\Bloock\Entity\Integrity\Proof** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### verifyRecords

Verifies the integrity of a set of records.

```php
public verifyRecords(array $records, string|null $network = null): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$records` | **array** |  |
| `$network` | **string&#124;null** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### validateRoot

Validates the integrity of a merkle root proof on blockchain.

```php
public validateRoot(string $root, string $network): int
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$root` | **string** |  |
| `$network` | **string** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-04-17
