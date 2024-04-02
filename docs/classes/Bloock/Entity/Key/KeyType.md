***

# KeyType

Represents the type of cryptographic key.



* Full name: `\Bloock\Entity\Key\KeyType`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`EcP256k`|public| |&quot;EcP256k&quot;|
|`Rsa2048`|public| |&quot;Rsa2048&quot;|
|`Rsa3072`|public| |&quot;Rsa3072&quot;|
|`Rsa4096`|public| |&quot;Rsa4096&quot;|
|`Aes128`|public| |&quot;Aes128&quot;|
|`Aes256`|public| |&quot;Aes256&quot;|
|`Bjj`|public| |&quot;Bjj&quot;|
|`UNRECOGNIZED`|public| |&quot;UNRECOGNIZED&quot;|


## Methods


### toProto



```php
public static toProto(string $type): int
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **string** |  |





***

### fromProto



```php
public static fromProto(int $alg): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alg` | **int** |  |





***


***
> Automatically generated on 2024-04-02
