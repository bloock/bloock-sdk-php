***

# CredentialSchema





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



```php
public getId(): string
```












***

### getType



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
> Automatically generated on 2024-02-07
