***

# LocalKey

Represents a local key with its public and private components.



* Full name: `\Bloock\Entity\Key\LocalKey`



## Properties


### key

Is the public key.

```php
public string $key
```






***

### privateKey

Is the private key.

```php
public string $privateKey
```






***

### keyType

Is the type of the key.

```php
public string $keyType
```






***

## Methods


### __construct

Constructs a LocalKey object with the specified parameters.

```php
public __construct(string $key, string $privateKey, string $keyType): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$key` | **string** |  |
| `$privateKey` | **string** |  |
| `$keyType` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\LocalKey $res): \Bloock\Entity\Key\LocalKey
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\LocalKey** |  |





***

### toProto



```php
public toProto(): \Bloock\LocalKey
```












***


***
> Automatically generated on 2024-02-21
