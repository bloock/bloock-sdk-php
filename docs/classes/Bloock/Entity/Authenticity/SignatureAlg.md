***

# SignatureAlg

Represents different signature algorithms.



* Full name: `\Bloock\Entity\Authenticity\SignatureAlg`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`ECDSA`|public| |&quot;ECDSA&quot;|
|`ENS`|public| |&quot;ENS&quot;|
|`BJJ`|public| |&quot;BJJ&quot;|
|`UNRECOGNIZED`|public| |&quot;UNRECOGNIZED&quot;|


## Methods


### fromString

Converts a string representation of an algorithm to the corresponding SignatureAlg enum.

```php
public static fromString(string $alg): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alg` | **string** |  |





***

### fromProto



```php
public static fromProto(\Bloock\SignerAlg $alg): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$alg` | **\Bloock\SignerAlg** |  |





***


***
> Automatically generated on 2024-04-17
