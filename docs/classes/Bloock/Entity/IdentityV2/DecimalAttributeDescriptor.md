***

# DecimalAttributeDescriptor

Represents a descriptor for an attribute with a decimal value.



* Full name: `\Bloock\Entity\IdentityV2\DecimalAttributeDescriptor`
* Parent class: [`\Bloock\Entity\IdentityV2\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\DecimalAttributeDefinitionV2 $res): \Bloock\Entity\IdentityV2\DecimalAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\DecimalAttributeDefinitionV2** |  |





***

### toProto



```php
public toProto(): \Bloock\DecimalAttributeDefinitionV2
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
