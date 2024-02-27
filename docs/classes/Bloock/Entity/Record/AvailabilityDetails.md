***

# AvailabilityDetails

Represents details related to the availability of a record, including content type and size.



* Full name: `\Bloock\Entity\Record\AvailabilityDetails`



## Properties


### type



```php
private ?string $type
```






***

### size



```php
private int $size
```






***

## Methods


### __construct

Constructs a AvailabilityDetails object with the specified parameters.

```php
public __construct(string|null $type, int $size): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string&#124;null** |  |
| `$size` | **int** |  |





***

### getType

Gets the content type of record file.

```php
public getType(): string|null
```












***

### getSize

Gets the byte size of the record file.

```php
public getSize(): int
```












***

### fromProto



```php
public static fromProto(\Bloock\AvailabilityDetails $details): \Bloock\Entity\Record\AvailabilityDetails
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **\Bloock\AvailabilityDetails** |  |





***

### toProto



```php
public toProto(): \Bloock\AvailabilityDetails
```












***


***
> Automatically generated on 2024-02-26
