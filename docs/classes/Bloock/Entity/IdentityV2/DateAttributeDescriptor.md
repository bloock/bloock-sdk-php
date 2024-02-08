***

# DateAttributeDescriptor

Represents a descriptor for a date attribute, including its display name, ID, description, and required status.



* Full name: `\Bloock\Entity\IdentityV2\DateAttributeDescriptor`
* Parent class: [`\Bloock\Entity\IdentityV2\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\DateAttributeDefinitionV2 $res): \Bloock\Entity\IdentityV2\DateAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\DateAttributeDefinitionV2** |  |





***

### toProto



```php
public toProto(): \Bloock\DateAttributeDefinitionV2
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
