<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_keys.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.ImportManagedCertificateRequest</code>
 */
class ImportManagedCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>bytes certificate = 2;</code>
     */
    protected $certificate = '';
    /**
     * Generated from protobuf field <code>optional string password = 3;</code>
     */
    protected $password = null;
    /**
     * Generated from protobuf field <code>.bloock.CertificateType certificate_type = 4;</code>
     */
    protected $certificate_type = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type string $certificate
     *     @type string $password
     *     @type int $certificate_type
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
     * Generated from protobuf field <code>bytes certificate = 2;</code>
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Generated from protobuf field <code>bytes certificate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkString($var, False);
        $this->certificate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return isset($this->password) ? $this->password : '';
    }

    public function hasPassword()
    {
        return isset($this->password);
    }

    public function clearPassword()
    {
        unset($this->password);
    }

    /**
     * Generated from protobuf field <code>optional string password = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.CertificateType certificate_type = 4;</code>
     * @return int
     */
    public function getCertificateType()
    {
        return $this->certificate_type;
    }

    /**
     * Generated from protobuf field <code>.bloock.CertificateType certificate_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setCertificateType($var)
    {
        GPBUtil::checkEnum($var, \Bloock\CertificateType::class);
        $this->certificate_type = $var;

        return $this;
    }

}

