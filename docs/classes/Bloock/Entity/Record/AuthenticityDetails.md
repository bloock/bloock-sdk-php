***

# AuthenticityDetails

Represents details related to the authenticity of a record, including signatures.



* Full name: `\Bloock\Entity\Record\AuthenticityDetails`



## Properties


### signatures



```php
private array $signatures
```






***

## Methods


### __construct

Constructs a AuthenticityDetails object with the specified parameters.

```php
public __construct(array $signatures): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$signatures` | **array** |  |





***

### getSignatures

Gets the signatures of the record.

```php
public getSignatures(): array
```












***

### fromProto



```php
public static fromProto(\Bloock\AuthenticityDetails $details): \Bloock\Entity\Record\AuthenticityDetails
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$details` | **\Bloock\AuthenticityDetails** |  |





***

### toProto



```php
public toProto(): \Bloock\AuthenticityDetails
```












***


***
> Automatically generated on 2024-02-07
