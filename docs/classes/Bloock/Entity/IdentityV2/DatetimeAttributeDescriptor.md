***

# DatetimeAttributeDescriptor

Represents a descriptor for an attribute with a datetime value.



* Full name: `\Bloock\Entity\IdentityV2\DatetimeAttributeDescriptor`
* Parent class: [`\Bloock\Entity\IdentityV2\AttributeDescriptor`](./AttributeDescriptor.md)




## Methods


### fromProto



```php
public static fromProto(\Bloock\DateTimeAttributeDefinitionV2 $res): \Bloock\Entity\IdentityV2\DatetimeAttributeDescriptor
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\DateTimeAttributeDefinitionV2** |  |





***

### toProto



```php
public toProto(): \Bloock\DateTimeAttributeDefinitionV2
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
