***

# CertificateType

Represents the type of certificate.



* Full name: `\Bloock\Entity\Key\CertificateType`


## Constants

| Constant | Visibility | Type | Value |
|:---------|:-----------|:-----|:------|
|`PEM`|public| |&quot;PEM&quot;|
|`PFX`|public| |&quot;PFX&quot;|
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
public static fromProto(int $type): string
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$type` | **int** |  |





***


***
> Automatically generated on 2024-02-21
