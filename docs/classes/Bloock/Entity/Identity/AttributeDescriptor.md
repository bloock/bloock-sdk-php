***

# AttributeDescriptor

Represents a descriptor for an attribute.



* Full name: `\Bloock\Entity\Identity\AttributeDescriptor`



## Properties


### displayName

Is the human-readable display name of the attribute.

```php
public string $displayName
```






***

### technicalName

Is the identifier for the attribute.

```php
public string $technicalName
```






***

### description

Is a description providing additional information about the attribute.

```php
public string|null $description
```






***

### required

Specifies whether the attribute is required.

```php
public bool $required
```






***

## Methods


### __construct



```php
public __construct(string $displayName, string $technicalName, string|null $description, bool $required): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |





***


***
> Automatically generated on 2024-02-26
