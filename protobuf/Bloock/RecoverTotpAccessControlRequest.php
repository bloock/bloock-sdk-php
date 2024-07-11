<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_keys.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.RecoverTotpAccessControlRequest</code>
 */
class RecoverTotpAccessControlRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>optional .bloock.ManagedKey managed_key = 3;</code>
     */
    protected $managed_key = null;
    /**
     * Generated from protobuf field <code>optional .bloock.ManagedCertificate managed_certificate = 4;</code>
     */
    protected $managed_certificate = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type string $code
     *     @type \Bloock\ManagedKey $managed_key
     *     @type \Bloock\ManagedCertificate $managed_certificate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockKeys::initOnce();
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
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.ManagedKey managed_key = 3;</code>
     * @return \Bloock\ManagedKey|null
     */
    public function getManagedKey()
    {
        return $this->managed_key;
    }

    public function hasManagedKey()
    {
        return isset($this->managed_key);
    }

    public function clearManagedKey()
    {
        unset($this->managed_key);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.ManagedKey managed_key = 3;</code>
     * @param \Bloock\ManagedKey $var
     * @return $this
     */
    public function setManagedKey($var)
    {
        GPBUtil::checkMessage($var, \Bloock\ManagedKey::class);
        $this->managed_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.ManagedCertificate managed_certificate = 4;</code>
     * @return \Bloock\ManagedCertificate|null
     */
    public function getManagedCertificate()
    {
        return $this->managed_certificate;
    }

    public function hasManagedCertificate()
    {
        return isset($this->managed_certificate);
    }

    public function clearManagedCertificate()
    {
        unset($this->managed_certificate);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.ManagedCertificate managed_certificate = 4;</code>
     * @param \Bloock\ManagedCertificate $var
     * @return $this
     */
    public function setManagedCertificate($var)
    {
        GPBUtil::checkMessage($var, \Bloock\ManagedCertificate::class);
        $this->managed_certificate = $var;

        return $this;
    }

}

