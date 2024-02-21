***

# CredentialSchema

Represents the schema information for a credential, including its ID and type.



* Full name: `\Bloock\Entity\Identity\CredentialSchema`



## Properties


### id



```php
private string $id
```






***

### type



```php
private string $type
```






***

## Methods


### __construct

Constructs an CredentialSchema object with the specified parameters.

```php
public __construct(string $id, string $type): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$type` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\CredentialSchema $res): \Bloock\Entity\Identity\CredentialSchema
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialSchema** |  |





***

### getId

Gets the id of the credential.

```php
public getId(): string
```












***

### getType

Gets the type of the credential.

```php
public getType(): string
```












***

### toProto



```php
public toProto(): \Bloock\CredentialSchema
```












***


***
> Automatically generated on 2024-02-21
