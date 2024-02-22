***

# ManagedKeyParams

Represents the parameters for creating a managed key.



* Full name: `\Bloock\Entity\Key\ManagedKeyParams`



## Properties


### name

Is the name of the managed key.

```php
public string|null $name
```






***

### protection

Is the protection level for the key.

```php
public string $protection
```

Is the protection level for the key.




***

### keyType

Is the timestamp indicating when the key expires.

```php
public string $keyType
```






***

### expiration

Is the type of the key.

```php
public int|null $expiration
```






***

## Methods


### __construct

Constructs a ManagedKeyParams object with the specified parameters.

```php
public __construct(string $protection, string $keyType, string|null $name = null, int|null $expiration = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$protection` | **string** |  |
| `$keyType` | **string** |  |
| `$name` | **string&#124;null** |  |
| `$expiration` | **int&#124;null** |  |





***

### fromProto



```php
public static fromProto(\Bloock\ManagedKeyParams $res): \Bloock\Entity\Key\ManagedKeyParams
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\ManagedKeyParams** |  |





***

### toProto



```php
public toProto(): \Bloock\ManagedKeyParams
```












***


***
> Automatically generated on 2024-02-22
