***

# AccessControl

Represents access control information, including Time-based One-Time Password (TOTP) and secret-based access.



* Full name: `\Bloock\Entity\Key\AccessControl`



## Properties


### accessControlTotp



```php
public ?\Bloock\Entity\Key\AccessControlTotp $accessControlTotp
```






***

### accessControlSecret



```php
public ?\Bloock\Entity\Key\AccessControlSecret $accessControlSecret
```






***

## Methods


### __construct

Constructs AccessControl object from an AccessControlTotp or AccessControlSecret object.

```php
public __construct( $accessControl): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$accessControl` | **** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\AccessControl
```












***


***
> Automatically generated on 2024-04-02
