***

# RecordClient

Provides functionality for creating records using various data sources and to interact with the [Bloock Record service](https://dashboard.bloock.com/login).



* Full name: `\Bloock\Client\RecordClient`



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

Creates a new RecordClient with the provided configuration.

```php
public __construct(\Bloock\ConfigData|null $config = null): mixed
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$config` | **\Bloock\ConfigData&#124;null** |  |





***

### fromRecord

Creates a RecordBuilder from an existing record.

```php
public fromRecord(\Bloock\Entity\Record\Record $record): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$record` | **\Bloock\Entity\Record\Record** |  |





***

### fromString

Creates a RecordBuilder from a string payload.

```php
public fromString(string $str): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$str` | **string** |  |





***

### fromHex

Creates a RecordBuilder from a hexadecimal string payload.

```php
public fromHex(string $hex): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$hex` | **string** |  |





***

### fromJson

Creates a RecordBuilder from a JSON string payload.

```php
public fromJson(string $json): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$json` | **string** |  |





***

### fromFile

Creates a RecordBuilder from a byte slice representing a file.

```php
public fromFile(array $file): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$file` | **array** |  |





***

### fromBytes

Creates a RecordBuilder from a byte slice payload.

```php
public fromBytes(array $bytes): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$bytes` | **array** |  |





***

### fromLoader

Creates a RecordBuilder from a data loader.

```php
public fromLoader(\Bloock\Entity\Availability\Loader $loader): \Bloock\Client\RecordBuilder
```








**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$loader` | **\Bloock\Entity\Availability\Loader** |  |





***


***
> Automatically generated on 2024-02-07
