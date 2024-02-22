***

# DecimalAttributeDescriptor

Represents a descriptor for an attribute with a decimal value.



* Full name: `\Bloock\Entity\Identity\DecimalAttributeDescriptor`
* Parent class: [`\Bloock\Entity\Identity\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\DecimalAttributeDefinition $res): \Bloock\Entity\Identity\DecimalAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\DecimalAttributeDefinition** |  |





***

### toProto



```php
public toProto(): \Bloock\DecimalAttributeDefinition
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
> Automatically generated on 2024-02-22
