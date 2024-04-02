***

# AccessControlType

Represents the access control type a cryptographic key.



* Full name: `\Bloock\Entity\Key\AccessControlType`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`NONE`|public| |&quot;NONE&quot;|
|`TOTP`|public| |&quot;TOTP&quot;|
|`SECRET`|public| |&quot;SECRET&quot;|
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
