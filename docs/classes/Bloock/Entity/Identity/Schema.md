***

# Schema





* Full name: `\Bloock\Entity\Identity\Schema`



## Properties


### id



```php
private string $id
```






***

### json



```php
private string $json
```






***

## Methods


### __construct



```php
public __construct(string $id, string $json): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **string** |  |
| `$json` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Schema $res): \Bloock\Entity\Identity\Schema
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\Schema** |  |





***

### getId



```php
public getId(): string
```












***

### toProto



```php
public toProto(): \Bloock\Schema
```












***

### getJson



```php
public getJson(): string
```












***


***
> Automatically generated on 2024-02-07
