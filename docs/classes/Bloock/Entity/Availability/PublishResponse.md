***

# PublishResponse

Represents an object with a the publish response attributes.



* Full name: `\Bloock\Entity\Availability\PublishResponse`



## Properties


### id



```php
public string $id
```






***

### ipnsKey



```php
public ?\Bloock\Entity\Availability\IpnsKey $ipnsKey
```






***

## Methods


### __construct

Constructs a PublishResponse object with the specified parameters.

```php
public __construct(mixed $id, mixed $ipnsKey = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$id` | **mixed** |  |
| `$ipnsKey` | **mixed** |  |




**Throws:**

- [`Exception`](../../../Exception.md)



***

### fromProto



```php
public static fromProto(\Bloock\PublishResponse $res): \Bloock\Entity\Availability\PublishResponse
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$res` | **\Bloock\PublishResponse** |  |





***


***
> Automatically generated on 2024-09-26
