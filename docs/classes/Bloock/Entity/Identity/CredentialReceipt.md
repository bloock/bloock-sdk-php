***

# CredentialReceipt





* Full name: `\Bloock\Entity\Identity\CredentialReceipt`



## Properties


### id



```php
private string $id
```






***

### anchorId



```php
private int $anchorId
```






***

## Methods


### __construct



```php
public __construct(string $id, int $anchorId): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$anchorId` | **int** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialReceipt $res): \Bloock\Entity\Identity\CredentialReceipt
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialReceipt** |  |





***

### getId



```php
public getId(): string
```












***

### getAnchorId



```php
public getAnchorId(): int
```












***

### toProto



```php
public toProto(): \Bloock\CredentialReceipt
```












***


***
> Automatically generated on 2024-02-07
