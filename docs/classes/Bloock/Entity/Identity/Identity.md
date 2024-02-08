***

# Identity





* Full name: `\Bloock\Entity\Identity\Identity`



## Properties


### mnemonic



```php
private string $mnemonic
```






***

### key



```php
private string $key
```






***

### privateKey



```php
private string $privateKey
```






***

## Methods


### __construct



```php
public __construct(string $mnemonic, string $key, string $privateKey): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$mnemonic` | **string** |  |
| `$key` | **string** |  |
| `$privateKey` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\Identity $res): \Bloock\Entity\Identity\Identity
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\Identity** |  |





***

### getMnemonic



```php
public getMnemonic(): string
```












***

### getKey



```php
public getKey(): string
```












***

### getPrivateKey



```php
public getPrivateKey(): string
```












***

### toProto



```php
public toProto(): \Bloock\Identity
```












***


***
> Automatically generated on 2024-02-07
