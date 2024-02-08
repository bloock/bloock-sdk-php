***

# IntegerAttributeDescriptor

Represents a descriptor for an attribute with an integer value.



* Full name: `\Bloock\Entity\IdentityV2\IntegerAttributeDescriptor`
* Parent class: [`\Bloock\Entity\IdentityV2\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\IntegerAttributeDefinitionV2 $res): \Bloock\Entity\IdentityV2\IntegerAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\IntegerAttributeDefinitionV2** |  |





***

### toProto



```php
public toProto(): \Bloock\IntegerAttributeDefinitionV2
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
> Automatically generated on 2024-02-07
