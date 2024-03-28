***

# IssuerStateReceipt

Represents a receipt for the issuer's state.



* Full name: `\Bloock\Entity\Identity\IssuerStateReceipt`



## Properties


### txHash



```php
private string $txHash
```






***

## Methods


### __construct

Constructs an IssuerStateReceipt object with the specified parameters.

```php
public __construct(string $txHash): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$txHash` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\IssuerStateReceipt $res): \Bloock\Entity\Identity\IssuerStateReceipt
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\IssuerStateReceipt** |  |





***

### getTxHash

Gets the transaction hash of the issuer state receipt.

```php
public getTxHash(): string
```












***

### toProto



```php
public toProto(): \Bloock\IssuerStateReceipt
```












***


***
> Automatically generated on 2024-03-28
