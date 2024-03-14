***

# DecimalEnumAttributeDescriptor

Represents a descriptor for an attribute with a decimal enum value.



* Full name: `\Bloock\Entity\Identity\DecimalEnumAttributeDescriptor`
* Parent class: [`\Bloock\Entity\Identity\AttributeDescriptor`](./AttributeDescriptor.md)



## Properties


### enumeration



```php
private \Google\Protobuf\Internal\RepeatedField $enumeration
```






***

## Methods


### __construct

Constructs an DecimalEnumAttributeDescriptor object with the specified parameters.

```php
public __construct(string $displayName, string $technicalName, string|null $description, bool $required, \Google\Protobuf\Internal\RepeatedField $enumeration): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$displayName` | **string** |  |
| `$technicalName` | **string** |  |
| `$description` | **string&#124;null** |  |
| `$required` | **bool** |  |
| `$enumeration` | **\Google\Protobuf\Internal\RepeatedField** |  |





***

### fromProto



```php
public static fromProto(\Bloock\DecimalEnumAttributeDefinition $res): \Bloock\Entity\Identity\DecimalEnumAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\DecimalEnumAttributeDefinition** |  |





***

### toProto



```php
public toProto(): \Bloock\DecimalEnumAttributeDefinition
```












***


## Inherited methods


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
> Automatically generated on 2024-03-14
