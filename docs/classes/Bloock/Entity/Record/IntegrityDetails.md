***

# IntegrityDetails

Represents details related to the integrity of a record, including hash and proof.



* Full name: `\Bloock\Entity\Record\IntegrityDetails`



## Properties


### hash



```php
private string $hash
```






***

### proof



```php
private ?\Bloock\Entity\Integrity\Proof $proof
```






***

## Methods


### __construct

Constructs a IntegrityDetails object with the specified parameters.

```php
public __construct(string $hash, \Bloock\Entity\Integrity\Proof|null $proof): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hash` | **string** |  |
| `$proof` | **\Bloock\Entity\Integrity\Proof&#124;null** |  |





***

### getHash

Gets the hash of the record.

```php
public getHash(): string
```












***

### getProof

Gets the proof of the record.

```php
public getProof(): \Bloock\Entity\Integrity\Proof|null
```












***

### fromProto



```php
public static fromProto(\Bloock\IntegrityDetails $details): \Bloock\Entity\Record\IntegrityDetails
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **\Bloock\IntegrityDetails** |  |





***

### toProto



```php
public toProto(): \Bloock\IntegrityDetails
```












***


***
> Automatically generated on 2024-03-05
