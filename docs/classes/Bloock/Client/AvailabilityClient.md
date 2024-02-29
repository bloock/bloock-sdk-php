***

# AvailabilityClient

Represents a client for interacting with the [Bloock Availability service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\AvailabilityClient`



## Properties


### bridge



```php
private $bridge
```






***

### config



```php
private $config
```






***

## Methods


### __construct

Creates a new instance of the AvailabilityClient with the provided configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### publish

Publishes a Bloock record to the Availability service using the specified publisher.

```php
public publish(\Bloock\Entity\Record\Record $record, \Bloock\Entity\Availability\Publisher $publisher): string
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |
| `$publisher` | **\Bloock\Entity\Availability\Publisher** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***

### retrieve

Gets a Bloock record from the Availability service using the specified loader.

```php
public retrieve(\Bloock\Entity\Availability\Loader $loader): \Bloock\Entity\Record\Record
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Bloock\Entity\Availability\Loader** |  |




**Throws:**

- [`Exception`](../../Exception.md)



***


***
> Automatically generated on 2024-02-29
