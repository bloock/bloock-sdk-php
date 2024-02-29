***

# RecordDetails

Represents all details related to a record, including integrity, authenticity, encryption, and availability details.



* Full name: `\Bloock\Entity\Record\RecordDetails`



## Properties


### integrity



```php
private ?\Bloock\Entity\Record\IntegrityDetails $integrity
```






***

### authenticity



```php
private ?\Bloock\Entity\Record\AuthenticityDetails $authenticity
```






***

### encryption



```php
private ?\Bloock\Entity\Record\EncryptionDetails $encryption
```






***

### availability



```php
private ?\Bloock\Entity\Record\AvailabilityDetails $availability
```






***

## Methods


### __construct

Constructs a RecordDetails object with the specified parameters.

```php
public __construct(\Bloock\Entity\Record\IntegrityDetails|null $integrity, \Bloock\Entity\Record\AuthenticityDetails|null $authenticity, \Bloock\Entity\Record\EncryptionDetails|null $encryption, \Bloock\Entity\Record\AvailabilityDetails|null $availability): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$integrity` | **\Bloock\Entity\Record\IntegrityDetails&#124;null** |  |
| `$authenticity` | **\Bloock\Entity\Record\AuthenticityDetails&#124;null** |  |
| `$encryption` | **\Bloock\Entity\Record\EncryptionDetails&#124;null** |  |
| `$availability` | **\Bloock\Entity\Record\AvailabilityDetails&#124;null** |  |





***

### getIntegrity

Gets the integrity details of the record.

```php
public getIntegrity(): \Bloock\Entity\Record\IntegrityDetails|null
```












***

### getAuthenticity

Gets the authenticity details of the record.

```php
public getAuthenticity(): \Bloock\Entity\Record\AuthenticityDetails|null
```












***

### getEncryption

Gets the encryption details of the record.

```php
public getEncryption(): \Bloock\Entity\Record\EncryptionDetails|null
```












***

### getAvailability

Gets the availability details of the record.

```php
public getAvailability(): \Bloock\Entity\Record\AvailabilityDetails|null
```












***

### fromProto



```php
public static fromProto(\Bloock\RecordDetails $details): \Bloock\Entity\Record\RecordDetails
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **\Bloock\RecordDetails** |  |





***

### toProto



```php
public toProto(): \Bloock\RecordDetails
```












***


***
> Automatically generated on 2024-02-29
