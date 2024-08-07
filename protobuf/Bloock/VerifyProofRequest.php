<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_integrity.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.VerifyProofRequest</code>
 */
class VerifyProofRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>.bloock.Proof proof = 2;</code>
     */
    protected $proof = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type \Bloock\Proof $proof
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockIntegrity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     * @return \Bloock\ConfigData|null
     */
    public function getConfigData()
    {
        return $this->config_data;
    }

    public function hasConfigData()
    {
        return isset($this->config_data);
    }

    public function clearConfigData()
    {
        unset($this->config_data);
    }

    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     * @param \Bloock\ConfigData $var
     * @return $this
     */
    public function setConfigData($var)
    {
        GPBUtil::checkMessage($var, \Bloock\ConfigData::class);
        $this->config_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.Proof proof = 2;</code>
     * @return \Bloock\Proof|null
     */
    public function getProof()
    {
        return $this->proof;
    }

    public function hasProof()
    {
        return isset($this->proof);
    }

    public function clearProof()
    {
        unset($this->proof);
    }

    /**
     * Generated from protobuf field <code>.bloock.Proof proof = 2;</code>
     * @param \Bloock\Proof $var
     * @return $this
     */
    public function setProof($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Proof::class);
        $this->proof = $var;

        return $this;
    }

}

