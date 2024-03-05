***

# Schema

Represents a schema with its attributes.



* Full name: `\Bloock\Entity\Identity\Schema`



## Properties


### cid



```php
private string $cid
```






***

### cidJsonLd



```php
private string $cidJsonLd
```






***

### schemaType



```php
private string $schemaType
```






***

### json



```php
private string $json
```






***

## Methods


### __construct

Constructs a Schema object with the specified parameters.

```php
public __construct(string $cid, string $cidJsonLd, string $schemaType, string $json): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$cid` | **string** |  |
| `$cidJsonLd` | **string** |  |
| `$schemaType` | **string** |  |
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

### getCid

Gets the cid of the schema.

```php
public getCid(): string
```












***

### getCidJsonLd

Gets de cid json-ld of the schema.

```php
public getCidJsonLd(): string
```












***

### getSchemaType

Gets the schema type of the schema.

```php
public getSchemaType(): string
```












***

### toProto



```php
public toProto(): \Bloock\Schema
```












***

### getJson

Gets the json representation of the schema.

```php
public getJson(): string
```












***


***
> Automatically generated on 2024-03-05
