<?php

namespace Bloock\Proof\Repository;

use Bloock\Config\Service\ConfigService;
use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\Blockchain;
use Bloock\Infrastructure\HttpClient;
use Bloock\Proof\Entity\Dto\ProofRetrieveRequest;
use Bloock\Proof\Entity\Dto\ProofRetrieveResponse;
use Bloock\Proof\Entity\Proof;
use Bloock\Record\Entity\Record;
use Bloock\Shared\Utils;
use Exception;

final class ProofRepository implements IProofRepository
{
    private $httpClient;
    private $blockchainClient;
    private $configService;

    public function __construct(HttpClient $httpClient, Blockchain $blockchainClient, IConfigService $configService)
    {
        $this->httpClient = $httpClient;
        $this->blockchainClient = $blockchainClient;
        $this->configService = $configService;
    }

    public function retrieveProof(array $records): ProofRetrieveResponse
    {
        $url = $this->getConfigService()->getApiBaseUrl() . "/core/proof";
        $body = new ProofRetrieveRequest($records);
        return new ProofRetrieveResponse($this->getHttpClient()->post($url, $body));
    }

    public function verifyProof(Proof $proof): Record
    {
        $leaves = [];
        foreach ($proof->leaves as $leaf) {
            array_push($leaves, Record::fromHash($leaf)->getUint8ArrayHash());
        }

        $hashes = [];
        foreach ($proof->nodes as $node) {
            array_push($hashes, Utils::hexToBytes($node));
        }

        $depth = Utils::hexToUint16($proof->depth);
        $bitmap = Utils::hexToBytes($proof->bitmap);

        $it_leaves = 0;
        $it_hashes = 0;
        $stack = array();

        while ($it_hashes < count($hashes) || $it_leaves < count($leaves)) {
            $act_depth = $depth[$it_hashes + $it_leaves];
            $act_hash = null;

            if (
                ($bitmap[floor(($it_hashes + $it_leaves) / 8)] &
                    (1 << (7 - (($it_hashes + $it_leaves) % 8)))) >
                0
            ) {
                $act_hash = $hashes[$it_hashes];
                $it_hashes += 1;
            } else {
                $act_hash = $leaves[$it_leaves];
                $it_leaves += 1;
            }

            while (count($stack) > 0 && $stack[count($stack) - 1][1] == $act_depth) {
                $last_hash = array_pop($stack);
                if (!$last_hash) {
                    throw new Exception("Verify: Stack got empty before capturing its value.");
                }
                $act_hash = Utils::merge($last_hash[0], $act_hash);
                $act_depth -= 1;
            }
            array_push($stack, array($act_hash, $act_depth));
        }

        return Record::fromHash(Utils::bytesToHex($stack[0][0]));
    }

    public function validateRoot(string $network, Record $root): int
    {
        return $this->getBlockchainClient()->validateRoot($network, $root->getHash());
    }

    private function getHttpClient(): HttpClient
    {
        return $this->httpClient;
    }

    private function getBlockchainClient(): Blockchain
    {
        return $this->blockchainClient;
    }

    private function getConfigService(): IConfigService
    {
        return $this->configService;
    }
}
