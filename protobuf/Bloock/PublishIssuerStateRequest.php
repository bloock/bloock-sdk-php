<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_v2.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.PublishIssuerStateRequest</code>
 */
class PublishIssuerStateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>string issuer_did = 2;</code>
     */
    protected $issuer_did = '';
    /**
     * Generated from protobuf field <code>.bloock.Signer signer = 3;</code>
     */
    protected $signer = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type string $issuer_did
     *     @type \Bloock\Signer $signer
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityV2::initOnce();
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
     * Generated from protobuf field <code>string issuer_did = 2;</code>
     * @return string
     */
    public function getIssuerDid()
    {
        return $this->issuer_did;
    }

    /**
     * Generated from protobuf field <code>string issuer_did = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuerDid($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer_did = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.Signer signer = 3;</code>
     * @return \Bloock\Signer|null
     */
    public function getSigner()
    {
        return $this->signer;
    }

    public function hasSigner()
    {
        return isset($this->signer);
    }

    public function clearSigner()
    {
        unset($this->signer);
    }

    /**
     * Generated from protobuf field <code>.bloock.Signer signer = 3;</code>
     * @param \Bloock\Signer $var
     * @return $this
     */
    public function setSigner($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Signer::class);
        $this->signer = $var;

        return $this;
    }

}

