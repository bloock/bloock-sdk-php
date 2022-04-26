<?php

use Bloock\BloockClient;
use Bloock\Config\Entity\Network;
use Bloock\Record\Entity\Record;

require_once(__DIR__ . "/vendor/autoload.php");

try {
    $apiKey = "test_4e3TVPHd4iPUxzY6pTxDOm-7u7EexvEikGjGSfiwolqFwYoT4Rth-vaCXCIokqP6";
    $sdk = new BloockClient($apiKey);

    $record = Record::fromJSON(array(
        'hello' => 'world'
    ));

    $record = $record->sign("48c685c3af18890b5fd82cd8b62e157c9988392d8dfe0d4ad5ad723b6b8428a8");
    $output = $record->retrieve();
    var_dump($output);

    // $receipts = $sdk->sendRecords($records);

    // $sdk->waitAnchor($receipts[0]->anchor);

    // $timestamp = $sdk->verifyRecords($records);

    // $proof = $sdk->getProof($records);
    // $root = $sdk->verifyProof($proof);
    // $timestamp2 = $sdk->validateRoot($root, Network::BLOOCK_CHAIN);

} catch (Exception $e) {
    var_dump($e);
    // Handle exception
}
