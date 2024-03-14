***

# DateAttributeDescriptor

Represents a descriptor for a date attribute, including its display name, ID, description, and required status.



* Full name: `\Bloock\Entity\Identity\DateAttributeDescriptor`
* Parent class: [`\Bloock\Entity\Identity\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\DateAttributeDefinition $res): \Bloock\Entity\Identity\DateAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\DateAttributeDefinition** |  |





***

### toProto



```php
public toProto(): \Bloock\DateAttributeDefinition
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
