***

# StringAttributeDescriptor

Represents a descriptor for an attribute with a string value.



* Full name: `\Bloock\Entity\Identity\StringAttributeDescriptor`
* Parent class: [`\Bloock\Entity\Identity\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\StringAttributeDefinition $res): \Bloock\Entity\Identity\StringAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\StringAttributeDefinition** |  |





***

### toProto



```php
public toProto(): \Bloock\StringAttributeDefinition
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
> Automatically generated on 2024-02-19
