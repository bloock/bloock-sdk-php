***

# RecordReceipt

Represents a receipt for a record, including anchor ID, client, record, and status information.



* Full name: `\Bloock\Entity\Integrity\RecordReceipt`



## Properties


### anchor



```php
private int $anchor
```






***

### client



```php
private string $client
```






***

### record



```php
private string $record
```






***

### status



```php
private string $status
```






***

## Methods


### __construct

Constructs a RecordReceipt object with the specified parameters.

```php
public __construct(int $anchor, string $client, string $record, string $status): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$anchor` | **int** |  |
| `$client` | **string** |  |
| `$record` | **string** |  |
| `$status` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\RecordReceipt $receipt): \Bloock\Entity\Integrity\RecordReceipt
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$receipt` | **\Bloock\RecordReceipt** |  |





***

### getAnchor

Gets the anchor of the record receipt.

```php
public getAnchor(): int
```












***

### getClient

Gets the client of the record receipt.

```php
public getClient(): string
```












***

### getRecord

Gets the record of the record receipt.

```php
public getRecord(): string
```












***

### getStatus

Gets the status of the record receipt.

```php
public getStatus(): string
```












***

### toProto



```php
public toProto(): \Bloock\RecordReceipt
```












***


***
> Automatically generated on 2024-03-14
