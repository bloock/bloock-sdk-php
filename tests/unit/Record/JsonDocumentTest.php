<?php


namespace Bloock\Tests;

use Bloock\Infrastructure\Signature;
use Bloock\Proof\Entity\Proof;
use Bloock\Record\Entity\Document\JsonDocument;
use PHPUnit\Framework\TestCase;

final class JsonDocumentTest extends TestCase
{

    private $content = array(
        'hello' => 'world'
    );

    /**
     * @group unit
     */
    public function test_constructor()
    {
        $json = $this->content;
        $file = new JSONDocument($json);

        $this->assertEquals($json, $file->getPayload());
    }

    /**
     * @group unit
     */
    public function test_constructor_with_metadata()
    {
        $json = array(
            '_payload_' => $this->content,
            '_metadata_' => array(
                'signature' => array('signature1')
            )
        );
        $file = new JSONDocument($json);

        $this->assertEquals($this->content, $file->getData());
    }

    /**
     * @group unit
     */
    public function test_two_same_files_generates_same_payload()
    {
        $json = $this->content;
        $file = new JSONDocument($json);
        $file2 = new JSONDocument($file->build());

        $this->assertEquals($file->getData(), $file2->getData());
        $this->assertEquals($file->getPayload(), $file2->getPayload());
        $this->assertEquals($file->getProof(), $file2->getProof());
        $this->assertEquals($file->getSignatures(), $file2->getSignatures());
    }

    /**
     * @group unit
     */
    public function test_two_same_files_with_metadata_generates_same_payload()
    {
        $json = array(
            '_payload_' => $this->content,
            '_metadata_' => array(
                'signature' => array('signature1')
            )
        );
        $file = new JSONDocument($json);
        $file2 = new JSONDocument($file->build());

        $this->assertEquals($file->getData(), $file2->getData());
        $this->assertEquals($file->getPayload(), $file2->getPayload());
        $this->assertEquals($file->getProof(), $file2->getProof());
        $this->assertEquals($file->getSignatures(), $file2->getSignatures());
    }

    /**
     * @group unit
     */
    public function test_set_proof()
    {
        $json = $this->content;
        $file = new JSONDocument($json);

        $proof = new Proof(array('leave1'), array('node1'), 'depth', 'bitmap');

        $file->setProof($proof);
        $this->assertEquals($file->getProof(), $proof);

        $file2 = new JSONDocument($file->build());

        $this->assertEquals($file2->getProof(), $proof);
    }

    /**
     * @group unit
     */
    public function test_set_signature()
    {
        $json = $this->content;
        $file = new JSONDocument($json);

        $signature = array(new Signature("signature1", array()));
        $file->addSignature(...$signature);
        $this->assertEquals($file->getSignatures(), $signature);

        $file2 = new JSONDocument($file->build());

        $this->assertEquals($file2->getSignatures(), $signature);
    }

    /**
     * @group unit
     */
    public function test_set_signature_and_proof()
    {
        $json = $this->content;
        $file = new JSONDocument($json);

        $signature = array(new Signature("signature1", array()));
        $file->addSignature(...$signature);

        $proof = new Proof(array('leave1'), array('node1'), 'depth', 'bitmap');
        $file->setProof($proof);

        $this->assertEquals($file->getSignatures(), $signature);
        $this->assertEquals($file->getProof(), $proof);

        $file2 = new JSONDocument($file->build());

        $this->assertEquals($file2->getSignatures(), $signature);
        $this->assertEquals($file2->getProof(), $proof);
    }
}
