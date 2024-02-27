***

# SchemaBuilder

Is a builder pattern for constructing schema instances.



* Full name: `\Bloock\Entity\Identity\SchemaBuilder`



## Properties


### displayName



```php
private string $displayName
```






***

### schemaType



```php
private string $schemaType
```






***

### version



```php
private string $version
```






***

### description



```php
private string $description
```






***

### configData



```php
private \Bloock\ConfigData $configData
```






***

### stringAttributes



```php
private array $stringAttributes
```






***

### integerAttributes



```php
private array $integerAttributes
```






***

### decimalAttributes



```php
private array $decimalAttributes
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

### stringEnumAttributes



```php
private array $stringEnumAttributes
```






***

### integerEnumAttributes



```php
private array $integerEnumAttributes
```






***

### decimalEnumAttributes



```php
private array $decimalEnumAttributes
```






***

## Methods


### __construct

Creates a new instance of SchemaBuilder with initial values.

```php
public __construct(string $displayName, string $schemaType, string $version, string $description, \Bloock\ConfigData $configData): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$schemaType` | **string** |  |
| `$version` | **string** |  |
| `$description` | **string** |  |
| `$configData` | **\Bloock\ConfigData** |  |





***

### addStringAttribute

Adds a string attribute descriptor to the schema builder.

```php
public addStringAttribute(string $name, string $technicalName, string|null $description, bool $required): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***

### addIntegerAttribute

Adds an integer attribute descriptor to the schema builder.

```php
public addIntegerAttribute(string $name, string $technicalName, string|null $description, bool $required): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***

### addDecimalAttribute

Adds a decimal attribute descriptor to the schema builder.

```php
public addDecimalAttribute(string $name, string $technicalName, string|null $description, bool $required): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***

### addBooleanAttribute

Adds a boolean attribute descriptor to the schema builder.

```php
public addBooleanAttribute(string $name, string $technicalName, string|null $description, bool $required): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***

### addDateAttribute

Adds a date attribute descriptor to the schema builder.

```php
public addDateAttribute(string $name, string $technicalName, string|null $description, bool $required): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***

### addDateTimeAttribute

Adds a datetime attribute descriptor to the schema builder.

```php
public addDateTimeAttribute(string $name, string $technicalName, string|null $description, bool $required): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***

### addStringEnumAttribute

Adds a string enum attribute descriptor to the schema builder.

```php
public addStringEnumAttribute(string $name, string $technicalName, string|null $description, bool $required, array $enumeration): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |
| `$enumeration` | **array** |  |





***

### addIntegerEnumAttribute

Adds an integer enum attribute descriptor to the schema builder.

```php
public addIntegerEnumAttribute(string $name, string $technicalName, string|null $description, bool $required, array $enumeration): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |
| `$enumeration` | **array** |  |





***

### addDecimalEnumAttribute

Adds a decimal enum attribute descriptor to the schema builder.

```php
public addDecimalEnumAttribute(string $name, string $technicalName, string|null $description, bool $required, array $enumeration): $this
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$name` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |
| `$enumeration` | **array** |  |





***

### build

Creates a schema using the configured attributes.

```php
public build(): \Bloock\Entity\Identity\Schema
```











**Throws:**

- [`Exception`](../../../Exception.md)



***


***
> Automatically generated on 2024-02-26
