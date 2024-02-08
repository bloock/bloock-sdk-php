***

# CredentialOffer





* Full name: `\Bloock\Entity\Identity\CredentialOffer`



## Properties


### thid



```php
private string $thid
```






***

### body



```php
private \Bloock\Entity\Identity\CredentialOfferBody $body
```






***

### from



```php
private string $from
```






***

### to



```php
private string $to
```






***

## Methods


### __construct



```php
public __construct(string $thid, \Bloock\Entity\Identity\CredentialOfferBody $body, string $from, string $to): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$thid` | **string** |  |
| `$body` | **\Bloock\Entity\Identity\CredentialOfferBody** |  |
| `$from` | **string** |  |
| `$to` | **string** |  |





***

### fromJSON



```php
public static fromJSON(string $json): \Bloock\Entity\Identity\CredentialOffer
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### fromProto



```php
public static fromProto(\Bloock\CredentialOffer $res): \Bloock\Entity\Identity\CredentialOffer
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\CredentialOffer** |  |





***

### toJSON



```php
public toJSON(): string
```











**Throws:**

- [`Exception`](../../../Exception.md)



***

### toProto



```php
public toProto(): \Bloock\CredentialOffer
```












***


***
> Automatically generated on 2024-02-07
