<?php


namespace Bloock\Tests;

use Bloock\Config\Service\IConfigService;
use Bloock\Infrastructure\Blockchain;
use Bloock\Infrastructure\HttpClient;
use Bloock\Proof\Entity\Proof;
use Bloock\Proof\Repository\IProofRepository;
use Bloock\Proof\Repository\ProofRepository;
use Bloock\Record\Entity\Record;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProofRepositoryTest extends TestCase
{

    private $configServiceMock;
    private $httpClientMock;
    private $blockchainClientMock;

    private $proofRepository;

    protected function setUp(): void
    {

        $this->configServiceMock = $this->createMock(IConfigService::class);
        $this->httpClientMock = $this->createMock(HttpClient::class);
        $this->blockchainClientMock = $this->createMock(Blockchain::class);

        $this->proofRepository = new ProofRepository($this->httpClientMock, $this->blockchainClientMock, $this->configServiceMock);
    }
    /**
     * @group unit
     */
    public function test_retrieve_proof_okay()
    {
        $mockNetworks = array();
        $mockNetworks['name'] = 'bloock_chain';
        $mockNetworks['tx_hash'] = '0xea004ce40674a4cbf603c25232be6a0391900ce1013c4586bee8262d8ff6bff9';
        $mockNetworks['state'] = 'Confirmed';
        $mockNetworks['created_at'] = 1629428382;


        $mockAnchor = array();
        $mockAnchor['anchor_id'] = 15;
        $mockAnchor['root'] = '5831da9441843151d392e7d293c592b923271c8a2ea4fa96d7263f97d68021ed';
        $mockAnchor['networks'] = $mockNetworks;
        $mockAnchor['status'] = 'Success';
        $this->httpClientMock->method('post')
            ->willReturn(array(
                'bitmap' => 'bfdf7000',
                'depth' => '000400060006000500030002000400060007000800090009',
                'leaves' => ['02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5'],
                'nodes' => [
                    'bb6986853646d083929d1d92638f3d4741a3b7149bd2b63c6bfedd32e3c684d3',
                    '0616067c793ac533815ae2d48d785d339e0330ce5bb5345b5e6217dd9d1dbeab',
                    '68b8f6b25cc700e64ed3e3d33f2f246e24801f93d29786589fbbab3b11f5bcee'
                ],
                'root' => 'c6372dab6a48637173a457e3ae0c54a500bb50346e847eccf2b818ade94d8ccf',
                'anchor' =>  $mockAnchor
            ));

        $response = $this->proofRepository->retrieveProof(array(Record::fromHash('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5')));
        $this->assertEquals('bfdf7000', $response->bitmap);
        $this->assertEquals("000400060006000500030002000400060007000800090009", $response->depth);
        $this->assertEquals(array('02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5'), $response->leaves);
        $this->assertEquals([
            'bb6986853646d083929d1d92638f3d4741a3b7149bd2b63c6bfedd32e3c684d3',
            '0616067c793ac533815ae2d48d785d339e0330ce5bb5345b5e6217dd9d1dbeab',
            '68b8f6b25cc700e64ed3e3d33f2f246e24801f93d29786589fbbab3b11f5bcee'
        ], $response->nodes);
    }
    /**
     * @group unit
     */
    public function test_verify_proof_keccak_1()
    {
        $leaves = [
            '02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5',
            '5e1712aca5f3925fc0ce628e7da2e1e407e2cc7b358e83a7152b1958f7982dab'
        ];
        $nodes = [
            '1ca0e9d9a206f08d38a4e2cf485351674ffc9b0f3175e0cb6dbd8e0e19829b97',
            '1ca0e9d9a206f08d38a4e2cf485351674ffc9b0f3175e0cb6dbd8e0e19829b97',
            '54944fcea707a57048c17ca7453fa5078a031143b44629776750e7f0ff7940f0',
            'd6f9bcd042be70b39b65dc2a8168858606b0a2fcf6d02c0a1812b1804efc0c37',
            'e663ec001b81b96eceabd1b766d49ec5d99adedc3e5f03d245b0d90f603f66d3'
        ];
        $depth = '0004000400030004000400030001';
        $bitmap = '7600';
        $root = 'a1fd8b878cee593a7debf12b5bcbf081a972bbec40e103c6d82197db2751ced7';

        $this->assertEquals($root, $this->proofRepository->verifyProof(new Proof($leaves, $nodes, $depth, $bitmap))->getHash());
    }
    /**
     * @group unit
     */
    public function test_verify_proof_keccak_2()
    {
        $leaves = [
            '02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5',
            '02aae7e86eb50f61a62083a320475d9d60cbd52749dbf08fa942b1b97f50aee5',
            '5e1712aca5f3925fc0ce628e7da2e1e407e2cc7b358e83a7152b1958f7982dab'
        ];
        $nodes = [
            '1ca0e9d9a206f08d38a4e2cf485351674ffc9b0f3175e0cb6dbd8e0e19829b97',
            '1ca0e9d9a206f08d38a4e2cf485351674ffc9b0f3175e0cb6dbd8e0e19829b97',
            '1509877db1aa81c699a144d1a240c5d463c9ff08b2df489b40a35802844baeb6',
            '54944fcea707a57048c17ca7453fa5078a031143b44629776750e7f0ff7940f0',
            'd6f9bcd042be70b39b65dc2a8168858606b0a2fcf6d02c0a1812b1804efc0c37',
            'e663ec001b81b96eceabd1b766d49ec5d99adedc3e5f03d245b0d90f603f66d3'
        ];
        $depth = '000500050004000400040004000400030001';
        $bitmap = '6d80';
        $root = '7e1f3c7e6d3515389b6117cc8c1ef5512d51c59743dc097c70de405a91861d2b';

        $this->assertEquals($root, $this->proofRepository->verifyProof(new Proof($leaves, $nodes, $depth, $bitmap))->getHash());
    }
    /**
     * @group unit
     */
    public function test_verify_proof_keccak_3()
    {
        $leaves = [
            '0000000000000000000000000000000000000000000000000000000000000000'
        ];
        $nodes = ['f49d70da1c2c8989766908e06b8d2277a6954ec8533696b9a404b631b0b7735a'];
        $depth = '00010001';
        $bitmap = '4000';
        $root = '5c67902dc31624d9278c286ef4ce469451d8f1d04c1edb29a5941ca0e03ddc8d';

        $this->assertEquals($root, $this->proofRepository->verifyProof(new Proof($leaves, $nodes, $depth, $bitmap))->getHash());
    }
}
