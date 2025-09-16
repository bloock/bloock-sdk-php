***

# IpnsKey

Represents an object with a key uuid identifier.



* Full name: `\Bloock\Entity\Availability\IpnsKey`



## Properties


### keyID



```php
public string $keyID
```






***

## Methods


### __construct

Creates an IpnsKey instance with a key uuid identifier.

```php
public __construct(mixed $keyID): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$keyID` | **mixed** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\IpnsKey
```












***

### fromProto



```php
public static fromProto(?\Bloock\IpnsKey $ipnsKey = null): ?\Bloock\Entity\Availability\IpnsKey
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$ipnsKey` | **?\Bloock\IpnsKey** |  |





***


***
> Automatically generated on 2025-09-16
