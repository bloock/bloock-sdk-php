***

# SchemaBuilder





* Full name: `\Bloock\Entity\Identity\SchemaBuilder`



## Properties


### displayName



```php
private string $displayName
```






***

### technicalName



```php
private string $technicalName
```






***

### configData



```php
private \Bloock\ConfigData $configData
```






***

### booleanAttributes



```php
private array $booleanAttributes
```






***

### dateAttributes



```php
private array $dateAttributes
```






***

### datetimeAttributes



```php
private array $datetimeAttributes
```






***

### stringAttributes



```php
private array $stringAttributes
```






***

### numberAttributes



```php
private array $numberAttributes
```






***

## Methods


### __construct



```php
public __construct(string $displayName, string $technicalName, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$technicalName` | **string** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### addBooleanAttribute



```php
public addBooleanAttribute(string $name, string $technicalName, ?string $description): \Bloock\Entity\Identity\SchemaBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **?string** |  |





***

### addDateAttribute



```php
public addDateAttribute(string $name, string $technicalName, ?string $description): \Bloock\Entity\Identity\SchemaBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **?string** |  |





***

### addDateTimeAttribute



```php
public addDateTimeAttribute(string $name, string $technicalName, ?string $description): \Bloock\Entity\Identity\SchemaBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **?string** |  |





***

### addStringAttribute



```php
public addStringAttribute(string $name, string $technicalName, ?string $description): \Bloock\Entity\Identity\SchemaBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **?string** |  |





***

### addNumberAttribute



```php
public addNumberAttribute(string $name, string $technicalName, ?string $description): \Bloock\Entity\Identity\SchemaBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **?string** |  |





***

### build



```php
public build(): \Bloock\Entity\Identity\Schema
```












***


***
> Automatically generated on 2024-02-07
