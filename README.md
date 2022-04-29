# Bloock SDK - PHP

This SDK offers all the features available in the Bloock Toolset:

- Write records
- Signing records
- Get records proof
- Validate records
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

    // From a JSON Document
    Record::fromJSON([ 'hello' => 'world' ]);
} catch (Exception $e) {
    // Handle exception
}
```

### Sign Record
You can sign a Record if it was constructed from JSON file. To use the sign functionality you need to provide private key as it's going to be used for the digital signature process. Remember to keep it safe!

**How can I generate a private key?**

Bloock libraries uses the ES256K signature algorithm that uses the secp256k1 <http://www.secg.org/sec2-v2.pdf> elliptic curve.

The private key needed to use the signing functionality needs to be specific for the elliptic curve used.

There are two ways to generate one:
1. Use a secp256k1 library (<https://github.com/simplito/elliptic-php>)
2. (Not recommended) Use an online tool to generate one, such as <https://secretscan.org/generator>.

This example shows how to sign records:
```php
<?php

use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $json = ['hello' => 'world'];
    $record = Record::fromJSON($json);

    // Random private key: ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457
    $record = $record->sign('ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457');
    var_dump($record->retrieve());


} catch (Exception $e) {
    // Handle exception
}
```

### Verify Record signature

You can verify an array of Records. The verifier it is going to check only Records constructed from a JSON file. Documents must be signed before running the verification.

```php
<?php

require_once(__DIR__ . "/vendor/autoload.php");
$apiKey = getenv("API_KEY");
$client = new BloockClient($apiKey);

try {
    //$records: previously signed record array

    $valid = $client->verifySignatures($records);
    if ($valid) {
        // Valid signature
    } else {
        // Invalid signature
    }

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

This example shows a complete flow.

1. Get a proof for an array of records.
2. Verify the integrity proof.
3. Validate the proof on Blockchain.

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

    //Get the proof from records
    $proof = $sdk->getProof($records);

    //Verify the proof
    $root = $sdk->verifyProof($proof);

    //Validate root from the proof on Blockchain
    $timestamp = $sdk->validateRoot($root, Network::BLOOCK_CHAIN);

    if ($timestamp > 0) {
        echo "Record is valid - Timestamp: $timestamp\n";
    } else {
        echo "Record is invalid\n";
    }
} catch (Exception $e) {
    // Handle exception
}
```

You can also validate an array of records with one simple step. Internally it is going to do all the same process. You don't need to specify the network where is going to validate.

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
        Record::fromString('Example Data 1'),
        Record::fromString('Example Data 2'),
        Record::fromString('Example Data 3')
        );

    // Without specifying Network
    $timestamp = $sdk->verifyRecords($records);

    // Specifying network
    $timestamp = $sdk->verifyRecords($records, Network::ETHEREUM_MAINNET);

} catch (Exception $e) {
    // Handle exception
}
```

### Full example

This snippet shows a complete data cycle including: sign (optional), write, wait for record confirmation and proof retrieval and validation. It uses the one function validation.

```php
<?php

use Bloock\BloockClient;
use Bloock\Config\Entity\Network;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $apiKey = getenv("API_KEY");
    $sdk = new BloockClient($apiKey);

    $record = Record::fromJSON(['hello' => 'world']);

    $record = $record->sign('ecb8e554bba690eff53f1bc914941d34ae7ec446e0508d14bab3388d3e5c9457');

    $records = [$record];

    $sendReceipts = $sdk->sendRecords($records);
    print 'Write record - Successful!';

    $sdk->waitAnchor($sendReceipts[0]->anchor, 60000);
    echo "Record reached Blockchain!\n";

    $timestamp = $sdk->verifyRecords($records);
    if ($timestamp > 0) {
        echo "Record is valid - Timestamp: $timestamp\n";
    } else {
        echo "Record is invalid\n";
    }
} catch (Exception $e) {
    // Handle exception
}
```