<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_v2.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.GetIssuerByKeyRequest</code>
 */
class GetIssuerByKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.IssuerKey issuer_key = 1;</code>
     */
    protected $issuer_key = null;
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 2;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>optional .bloock.IssuerParams issuer_params = 3;</code>
     */
    protected $issuer_params = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\IssuerKey $issuer_key
     *     @type \Bloock\ConfigData $config_data
     *     @type \Bloock\IssuerParams $issuer_params
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bloock.IssuerKey issuer_key = 1;</code>
     * @return \Bloock\IssuerKey|null
     */
    public function getIssuerKey()
    {
        return $this->issuer_key;
    }

    public function hasIssuerKey()
    {
        return isset($this->issuer_key);
    }

    public function clearIssuerKey()
    {
        unset($this->issuer_key);
    }

    /**
     * Generated from protobuf field <code>.bloock.IssuerKey issuer_key = 1;</code>
     * @param \Bloock\IssuerKey $var
     * @return $this
     */
    public function setIssuerKey($var)
    {
        GPBUtil::checkMessage($var, \Bloock\IssuerKey::class);
        $this->issuer_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 2;</code>
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
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 2;</code>
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
     * Generated from protobuf field <code>optional .bloock.IssuerParams issuer_params = 3;</code>
     * @return \Bloock\IssuerParams|null
     */
    public function getIssuerParams()
    {
        return $this->issuer_params;
    }

    public function hasIssuerParams()
    {
        return isset($this->issuer_params);
    }

    public function clearIssuerParams()
    {
        unset($this->issuer_params);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.IssuerParams issuer_params = 3;</code>
     * @param \Bloock\IssuerParams $var
     * @return $this
     */
    public function setIssuerParams($var)
    {
        GPBUtil::checkMessage($var, \Bloock\IssuerParams::class);
        $this->issuer_params = $var;

        return $this;
    }

}

