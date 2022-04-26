<?php

namespace Bloock;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Anchor\Service\AnchorService;
use Bloock\Record\Service\RecordService;
use Bloock\Config\Entity\NetworkConfiguration;
use Bloock\Config\Service\ConfigService;
use Bloock\Infrastructure\HttpClient;
use Bloock\Shared\DependencyInjection;
use Bloock\Proof\Entity\Proof;
use Bloock\Record\Entity\Record;
use Bloock\Proof\Service\ProofService;

error_reporting(E_ALL ^ E_DEPRECATED);

/**
 * Entrypoint to the Bloock SDK:
 *    This SDK offers all the features available in the Bloock Toolset:
 *      * Write records
 *      * Get records proof
 *      * Validate proof
 *      * Get records details
 */
final class BloockClient
{
    /**
     * Constructor with API Key that enables accessing to Bloock's functionalities.
     *
     * @param string Client API Key.
     */
    public function __construct(string $apiKey)
    {
        DependencyInjection::getHttpClient()->setApiKey($apiKey);
    }

    /**
     * Overrides the API host.
     *
     * @param  mixed The API host to apply
     * @return void
     */
    public function setApiHost(string $host): void
    {
        DependencyInjection::getConfigService()->setApiHost($host);
    }

    /**
     * Overrides the Network configuration.
     *
     * @param  string The network to override the configuration
     * @param  NetworkConfiguration The new configuration
     * @return void
     */
    public function setNetworkConfiguration(string $network, NetworkConfiguration $configuration): void
    {
        DependencyInjection::getConfigService()->setNetworkConfiguration($network, $configuration);
    }

    /**
     * Sends a list of Record to Bloock.
     *
     * @param  array List of Record to send.
     * @return array List of RecordReceipt of each Record sent.
     * @throws InvalidRecordException At least one of the records sent was not well formed.
     * @throws HttpRequestException Error return by Bloock's API.
     */
    public function sendRecords(array $records): array
    {
        return DependencyInjection::getRecordService()->sendRecords($records);
    }

    /**
     * Retrieves all RecordReceipt for the specified Anchor.
     *
     * @param  array List of Record to fetch.
     * @return array List with the RecordReceipt of each record requested.
     * @throws InvalidRecordException At least one of the records sent was not well formed.
     * @throws HttpRequestException Error return by Bloock's API.
     */
    public function getRecords(array $records): array
    {
        return DependencyInjection::getRecordService()->getRecords($records);
    }

    /**
     * Gets an specific anchor id details.
     *
     * @param  int Id of the Anchor to look for.
     * @return Anchor Anchor object matching the id.
     * @throws InvalidArgumentException Informs that the input is not a number.
     * @throws HttpRequestException Error return by Bloock's API.
     */
    public function getAnchor(int $anchor): Anchor
    {
        return DependencyInjection::getAnchorService()->getAnchor($anchor);
    }

    /**
     * Waits until the anchor specified is confirmed in Bloock.
     *
     * @param  int Id of the Anchor to wait for.
     * @param  int Timeout time in miliseconds. After exceeding this time returns an exception.
     * @return Anchor Anchor object matching the id.
     * @throws InvalidArgumentException Informs that the input is not a number.
     * @throws AnchorNotFoundException The anchor provided could not be found.
     * @throws WaitAnchorTimeoutException Returned when the function has exceeded the timeout.
     * @throws HttpRequestException Error return by Bloock's API.
     */
    public function waitAnchor(int $anchor, int $timeout = 120000): Anchor
    {
        return DependencyInjection::getAnchorService()->waitAnchor($anchor, $timeout);
    }

    /**
     * Retrieves an integrity Proof for the specified list of Record.
     *
     * @param  array List of records to validate.
     * @return Proof The Proof object containing the elements necessary to verify the integrity of the records in the input list. If no record was requested, then returns None.
     * @throws InvalidRecordException At least one of the records sent was not well formed.
     * @throws HttpRequestException Error return by Bloock's API.
     */
    public function getProof(array $records): Proof
    {
        return DependencyInjection::getProofService()->retrieveProof($records);
    }

    /**
     * Verifies if the specified integrity Proof is valid.
     *
     * @param  Proof Proof to validate.
     * @return Record Integrity proof's root record.
     * @throws ProofNotFoundException Proof not found.
     */
    public function verifyProof(Proof $proof): Record
    {
        return DependencyInjection::getProofService()->verifyProof($proof);
    }

    /**
     * Validates if the root is currently included in the blockchain.
     * 
     * @param  Record An integrity Proof's root Record.
     * @param  string blockchain network where the records will be validated.
     * @return int A number representing the timestamp in milliseconds when the anchor was registered in Blockchain.
     * @throws Web3Exception Error connecting to blockchain.
     */
    public function validateRoot(Record $root, string $network): int
    {
        return DependencyInjection::getProofService()->validateRoot($root, $network);
    }

    /**
     * It retrieves a proof for the specified list of Anchor using getProof and verifies it using verifyProof and validateRoot.
     *
     * @param  mixed List of records to validate
     * @param string|null Optional network to verify from. 
     * @return int A number representing the timestamp in milliseconds when the anchor was registered in Blockchain
     * @throws InvalidArgumentException Informs that the input is empty.
     * @throws HttpRequestException Error return by Bloock's API.
     * @throws ProofNotFoundException Proof not found.
     * @throws Web3Exception Error connecting to blockchain.
     */
    public function verifyRecords(array $records, string $network = null): int
    {
        return DependencyInjection::getProofService()->verifyRecords($records, $network);
    }
}
