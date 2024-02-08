***

# CredentialSchema

Represents the schema information for a credential, including its ID and type.



* Full name: `\Bloock\Entity\IdentityV2\CredentialSchema`



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
public static fromProto(\Bloock\CredentialSchemaV2 $res): \Bloock\Entity\IdentityV2\CredentialSchema
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialSchemaV2** |  |





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
public toProto(): \Bloock\CredentialSchemaV2
```












***


***
> Automatically generated on 2024-02-07
