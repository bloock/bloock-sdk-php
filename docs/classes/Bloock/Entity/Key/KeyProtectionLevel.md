***

# KeyProtectionLevel

Represents the protection level of a cryptographic key.



* Full name: `\Bloock\Entity\Key\KeyProtectionLevel`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`SOFTWARE`|public| |&quot;SOFTWARE&quot;|
|`HSM`|public| |&quot;HSM&quot;|
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
> Automatically generated on 2024-03-28
