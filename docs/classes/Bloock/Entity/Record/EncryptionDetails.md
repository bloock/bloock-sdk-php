***

# EncryptionDetails

Represents details related to the encryption of a record, including algorithm, key, and subject.



* Full name: `\Bloock\Entity\Record\EncryptionDetails`



## Properties


### alg



```php
private ?string $alg
```






***

### key



```php
private ?string $key
```






***

### subject



```php
private ?string $subject
```






***

## Methods


### __construct

Constructs a EncryptionDetails object with the specified parameters.

```php
public __construct(string|null $alg, string|null $key, string|null $subject): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alg` | **string&#124;null** |  |
| `$key` | **string&#124;null** |  |
| `$subject` | **string&#124;null** |  |





***

### getAlg

Gets the algorithm of the encryption.

```php
public getAlg(): string|null
```












***

### getKey

Gets the public key of the encryption.

```php
public getKey(): string|null
```












***

### getSubject

Gets the subject of the subject.

```php
public getSubject(): string|null
```












***

### fromProto



```php
public static fromProto(\Bloock\EncryptionDetails $details): \Bloock\Entity\Record\EncryptionDetails
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **\Bloock\EncryptionDetails** |  |





***

### toProto



```php
public toProto(): \Bloock\EncryptionDetails
```












***


***
> Automatically generated on 2024-02-19
