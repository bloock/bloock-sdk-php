<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: keys.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.ImportManagedCertificateResponse</code>
 */
class ImportManagedCertificateResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ManagedCertificate managed_certificate = 1;</code>
     */
    protected $managed_certificate = null;
    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 2;</code>
     */
    protected $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ManagedCertificate $managed_certificate
     *     @type \Bloock\Error $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Keys::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bloock.ManagedCertificate managed_certificate = 1;</code>
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
     * Generated from protobuf field <code>.bloock.ManagedCertificate managed_certificate = 1;</code>
     * @param \Bloock\ManagedCertificate $var
     * @return $this
     */
    public function setManagedCertificate($var)
    {
        GPBUtil::checkMessage($var, \Bloock\ManagedCertificate::class);
        $this->managed_certificate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 2;</code>
     * @return \Bloock\Error|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 2;</code>
     * @param \Bloock\Error $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Error::class);
        $this->error = $var;

        return $this;
    }

}

