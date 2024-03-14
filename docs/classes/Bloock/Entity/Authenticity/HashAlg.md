***

# HashAlg

Represents different hash algorithms.



* Full name: `\Bloock\Entity\Authenticity\HashAlg`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SHA_256`|public| |&quot;SHA_256&quot;|
|`KECCAK_256`|public| |&quot;KECCAK_256&quot;|
|`POSEIDON`|public| |&quot;POSEIDON&quot;|
|`NONE`|public| |&quot;NONE&quot;|
|`UNRECOGNIZED`|public| |&quot;UNRECOGNIZED&quot;|


## Methods


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


***
> Automatically generated on 2024-03-14
