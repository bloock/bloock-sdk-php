# Bloock SDK - PHP

This SDK offers all the features available in the Bloock Toolset:

- Write records
- Get records proof
- Validate proof
- Get records details

## Installation

The SDK can be installed with the composer package manager:

```shell
$ composer require bloock/sdk
```

## Usage

The following examples summarize how to access the different functionalities available:

### Prepare data

In order to interact with the SDK, the data should be processed through the Hash module.

There are several ways to generate a Hash:

```php
<?php

use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    // From an object
    Record::fromArray([
        'data' => 'Example Data'
    ]);

    // From a hash string (hex encoded 64-chars long string)
    Record::fromHash('5ac706bdef87529b22c08646b74cb98baf310a46bd21ee420814b04c71fa42b1');

    // From a hex encoded string
    Record::fromHex('0123456789abcdef');

    // From a string
    Record::fromString('Example Data');

    // From a Uint8Array with a lenght of 32
    Record::fromUint8Array([1, 2, 3, 255]);
} catch (Exception $e) {
    // Handle exception
}
```

### Send records

This example shows how to send data to Bloock

```php
<?php

use Bloock\BloockClient;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $apiKey = getenv("API_KEY");
    $sdk = new BloockClient($apiKey);

    $records = array(
        Record::fromString("Example data 1"),
        Record::fromString("Example data 2"),
        Record::fromString("Example data 3")
    );

    $receipts = $sdk->sendRecords($records);
} catch (Exception $e) {
    // Handle exception
}

```

### Get records status

This example shows how to get all the details and status of records:

```php
<?php

use Bloock\BloockClient;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $apiKey = getenv("API_KEY");
    $sdk = new BloockClient($apiKey);

    $records = array(
        Record::fromString("Example data 1"),
        Record::fromString("Example data 2"),
        Record::fromString("Example data 3")
    );

    $receipts = $sdk->getRecords($records);
} catch (Exception $e) {
    // Handle exception
}
```

### Wait for records to process

This example shows how to wait for a record to be processed by Bloock after sending it.

```php
<?php

use Bloock\BloockClient;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $apiKey = getenv("API_KEY");
    $sdk = new BloockClient($apiKey);

    $records = array(
        Record::fromString("Example data 1"),
        Record::fromString("Example data 2")
    );

    $receipts = $sdk->sendRecords($records);
    $sdk->waitAnchor($sendReceipts[0]->anchor, 60000);
} catch (Exception $e) {
    // Handle exception
}
```

### Get and validate records proof

This example shows how to get a proof for an array of records and validate it:

```php
<?php

use Bloock\BloockClient;
use Bloock\Config\Entity\Network;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $apiKey = getenv("API_KEY");
    $sdk = new BloockClient($apiKey);

    $records = array(
        Record::fromString("Example data 1"),
        Record::fromString("Example data 2"),
        Record::fromString("Example data 3")
    );

    $proof = $sdk->getProof($records);
    $timestamp = $sdk->verifyProof($proof, Network::BLOOCK_CHAIN);
    if ($timestamp > 0) {
        echo "Record is valid - Timestamp: $timestamp\n";
    } else {
        echo "Record is invalid\n";
    }
} catch (Exception $e) {
    // Handle exception
}
```

### Full example

This snippet shows a complete data cycle including: write, wait for record confirmation and proof retrieval and validation.

```php
<?php

use Bloock\BloockClient;
use Bloock\Config\Entity\Network;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

// Helper function to get a random data string
function generateRandomString()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $length = rand(10, 40);
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

try {
    $apiKey = getenv("API_KEY");
    $sdk = new BloockClient($apiKey);

    $string = generateRandomString();
    $records = array(Record::fromString($string));

    $sendReceipts = $sdk->sendRecords($records);
    echo "Write record - Successful!\n";

    $sdk->waitAnchor($sendReceipts[0]->anchor, 60000);
    echo "Record reached Blockchain!\n";

    $proof = $sdk->getProof($records);
    $timestamp = $sdk->verifyProof($proof, Network::BLOOCK_CHAIN);
    if ($timestamp > 0) {
        echo "Record is valid - Timestamp: $timestamp\n";
    } else {
        echo "Record is invalid\n";
    }
} catch (Exception $e) {
    // Handle exception
}
```
