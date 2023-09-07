<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_entities_v2.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.CredentialProofV2</code>
 */
class CredentialProofV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string signature_proof = 1;</code>
     */
    protected $signature_proof = '';
    /**
     * Generated from protobuf field <code>optional string integrity_proof = 2;</code>
     */
    protected $integrity_proof = null;
    /**
     * Generated from protobuf field <code>optional string sparse_mt_proof = 3;</code>
     */
    protected $sparse_mt_proof = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signature_proof
     *     @type string $integrity_proof
     *     @type string $sparse_mt_proof
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityEntitiesV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string signature_proof = 1;</code>
     * @return string
     */
    public function getSignatureProof()
    {
        return $this->signature_proof;
    }

    /**
     * Generated from protobuf field <code>string signature_proof = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureProof($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature_proof = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string integrity_proof = 2;</code>
     * @return string
     */
    public function getIntegrityProof()
    {
        return isset($this->integrity_proof) ? $this->integrity_proof : '';
    }

    public function hasIntegrityProof()
    {
        return isset($this->integrity_proof);
    }

    public function clearIntegrityProof()
    {
        unset($this->integrity_proof);
    }

    /**
     * Generated from protobuf field <code>optional string integrity_proof = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIntegrityProof($var)
    {
        GPBUtil::checkString($var, True);
        $this->integrity_proof = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string sparse_mt_proof = 3;</code>
     * @return string
     */
    public function getSparseMtProof()
    {
        return isset($this->sparse_mt_proof) ? $this->sparse_mt_proof : '';
    }

    public function hasSparseMtProof()
    {
        return isset($this->sparse_mt_proof);
    }

    public function clearSparseMtProof()
    {
        unset($this->sparse_mt_proof);
    }

    /**
     * Generated from protobuf field <code>optional string sparse_mt_proof = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSparseMtProof($var)
    {
        GPBUtil::checkString($var, True);
        $this->sparse_mt_proof = $var;

        return $this;
    }

}

