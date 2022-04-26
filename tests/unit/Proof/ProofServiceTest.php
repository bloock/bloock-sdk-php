<?php


namespace Bloock\Tests;

use Bloock\Anchor\Entity\Anchor;
use Bloock\Proof\Service\IProofService;
use Bloock\Proof\Service\ProofService;
use Bloock\Proof\Entity\Dto\ProofWriteResponse;
use Bloock\Proof\Entity\Exception\InvalidProofException;
use Bloock\Proof\Entity\Proof;
use Bloock\Proof\Repository\IProofRepository;
use Bloock\Record\Entity\Record;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

final class ProofServiceTest extends TestCase
{

    private $proofRepositoryMock;
    private $proofService;

    protected function setUp(): void
    {
        $this->proofRepositoryMock = $this->createMock(IProofRepository::class);

        $this->proofService = new ProofService($this->proofRepositoryMock);
    }
    /**
     * @group unit
     */
    public function test_get_proofs_okay_from_string()
    {
        $mockAnchor = new Anchor(1, [], [], 'c6372dab6a48637173a457e3ae0c54a500bb50346e847eccf2b818ade94d8ccf', 'pending');

        $this->proofRepositoryMock->method('retrieveProof')
                ->willReturn(new Proof(['leaf1'], ['node1'], 'depth', 'bitmap', $mockAnchor));
        
        $records = array(Record::fromString('myrecord'));
        $response = $this->proofService->retrieveProof($records);
        $this->assertEquals(['leaf1'], $response->leaves);
        $this->assertEquals(['node1'], $response->nodes);
        $this->assertEquals('depth', $response->depth);
        $this->assertEquals('bitmap', $response->bitmap);
    }
    /**
     * @group unit
     */
    public function test_get_proofs_okay_from_json_with_proof()
    {
        $mockAnchor = new Anchor(1, [], [], 'c6372dab6a48637173a457e3ae0c54a500bb50346e847eccf2b818ade94d8ccf', 'pending');

        $this->proofRepositoryMock->method('retrieveProof')
                ->willReturn(new Proof(['leaf1'], ['node1'], 'depth', 'bitmap', $mockAnchor));
        $mockProof = new Proof(['leaf1'], ['node1'], 'depth', 'bitmap');
        
        $records = array(Record::fromJSON(array('hello' => 'world')));
        $records[0]->setProof($mockProof);
        $response = $this->proofService->retrieveProof($records);
        $this->assertEquals(['leaf1'], $response->leaves);
        $this->assertEquals(['node1'], $response->nodes);
        $this->assertEquals('depth', $response->depth);
        $this->assertEquals('bitmap', $response->bitmap);
    }
    /**
     * @group unit
     */
    public function test_get_proofs_okay_from_json_without_proof()
    {
        $mockAnchor = new Anchor(1, [], [], 'c6372dab6a48637173a457e3ae0c54a500bb50346e847eccf2b818ade94d8ccf', 'pending');

        $this->proofRepositoryMock->method('retrieveProof')
                ->willReturn(new Proof(['leaf1'], ['node1'], 'depth', 'bitmap', $mockAnchor));      
        
        $records = array(Record::fromJSON(array('hello' => 'world')));
        $response = $this->proofService->retrieveProof($records);
        $this->assertEquals(['leaf1'], $response->leaves);
        $this->assertEquals(['node1'], $response->nodes);
        $this->assertEquals('depth', $response->depth);
        $this->assertEquals('bitmap', $response->bitmap);
    }
}
