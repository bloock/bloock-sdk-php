***

# Bloock

Provides a centralized configuration for the Bloock SDK library. For information about Bloock SDK in Go, see https://bloock.com.



* Full name: `\Bloock\Bloock`



## Properties


### apiKey

Is a string variable representing the API key used for authentication with the Bloock SDK, create [here](https://dashboard.bloock.com/login).

```php
public static string $apiKey
```



* This property is **static**.


***

### forceEnv

Is a string variable used to force a specific environment configuration, it allows developers to set a predefined environment for the Bloock SDK.

```php
public static string $forceEnv
```



* This property is **static**.


***

### identityApiHost

Is a string variable representing the host URL used for Identity Managed API, required to be set for identity-related features of the Bloock SDK.

```php
public static string $identityApiHost
```



* This property is **static**.


***

### apiHost

Is a string variable representing the host URL used for API communication with the Bloock SDK.

```php
public static string $apiHost
```



* This property is **static**.


***

### disableAnalytics

Is a boolean variable that, when set to true, disables the analytics feature in the Bloock SDK.

```php
public static bool $disableAnalytics
```



* This property is **static**.


***

### networkConfig

Is an array variable that holds network configurations associated with specific network IDs in the Bloock SDK.

```php
public static array $networkConfig
```



* This property is **static**.


***

## Methods


### setProvider

Sets the HTTP provider for the specified network in the Bloock SDK configuration.

```php
public static setProvider(\Bloock\Network $network, string $provider): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$network` | **\Bloock\Network** |  |
| `$provider` | **string** |  |





***

### setContractAddress

Sets the contract address for the specified network in the Bloock SDK configuration.

```php
public static setContractAddress(\Bloock\Network $network, string $contractAddress): void
```



* This method is **static**.




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$network` | **\Bloock\Network** |  |
| `$contractAddress` | **string** |  |





***


***
> Automatically generated on 2024-02-21
