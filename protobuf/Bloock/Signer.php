<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authenticity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.Signer</code>
 */
class Signer extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional .bloock.LocalKey local_key = 1;</code>
     */
    protected $local_key = null;
    /**
     * Generated from protobuf field <code>optional .bloock.ManagedKey managed_key = 2;</code>
     */
    protected $managed_key = null;
    /**
     * Generated from protobuf field <code>optional .bloock.LocalCertificate local_certificate = 3;</code>
     */
    protected $local_certificate = null;
    /**
     * Generated from protobuf field <code>optional .bloock.ManagedCertificate managed_certificate = 4;</code>
     */
    protected $managed_certificate = null;
    /**
     * Generated from protobuf field <code>optional .bloock.HashAlg hash_alg = 5;</code>
     */
    protected $hash_alg = null;
    /**
     * Generated from protobuf field <code>optional .bloock.AccessControl access_control = 6;</code>
     */
    protected $access_control = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\LocalKey $local_key
     *     @type \Bloock\ManagedKey $managed_key
     *     @type \Bloock\LocalCertificate $local_certificate
     *     @type \Bloock\ManagedCertificate $managed_certificate
     *     @type int $hash_alg
     *     @type \Bloock\AccessControl $access_control
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\AuthenticityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.LocalKey local_key = 1;</code>
     * @return \Bloock\LocalKey|null
     */
    public function getLocalKey()
    {
        return $this->local_key;
    }

    public function hasLocalKey()
    {
        return isset($this->local_key);
    }

    public function clearLocalKey()
    {
        unset($this->local_key);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.LocalKey local_key = 1;</code>
     * @param \Bloock\LocalKey $var
     * @return $this
     */
    public function setLocalKey($var)
    {
        GPBUtil::checkMessage($var, \Bloock\LocalKey::class);
        $this->local_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.ManagedKey managed_key = 2;</code>
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
     * Generated from protobuf field <code>optional .bloock.ManagedKey managed_key = 2;</code>
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
     * Generated from protobuf field <code>optional .bloock.LocalCertificate local_certificate = 3;</code>
     * @return \Bloock\LocalCertificate|null
     */
    public function getLocalCertificate()
    {
        return $this->local_certificate;
    }

    public function hasLocalCertificate()
    {
        return isset($this->local_certificate);
    }

    public function clearLocalCertificate()
    {
        unset($this->local_certificate);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.LocalCertificate local_certificate = 3;</code>
     * @param \Bloock\LocalCertificate $var
     * @return $this
     */
    public function setLocalCertificate($var)
    {
        GPBUtil::checkMessage($var, \Bloock\LocalCertificate::class);
        $this->local_certificate = $var;

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

    /**
     * Generated from protobuf field <code>optional .bloock.HashAlg hash_alg = 5;</code>
     * @return int
     */
    public function getHashAlg()
    {
        return isset($this->hash_alg) ? $this->hash_alg : 0;
    }

    public function hasHashAlg()
    {
        return isset($this->hash_alg);
    }

    public function clearHashAlg()
    {
        unset($this->hash_alg);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.HashAlg hash_alg = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setHashAlg($var)
    {
        GPBUtil::checkEnum($var, \Bloock\HashAlg::class);
        $this->hash_alg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.AccessControl access_control = 6;</code>
     * @return \Bloock\AccessControl|null
     */
    public function getAccessControl()
    {
        return $this->access_control;
    }

    public function hasAccessControl()
    {
        return isset($this->access_control);
    }

    public function clearAccessControl()
    {
        unset($this->access_control);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.AccessControl access_control = 6;</code>
     * @param \Bloock\AccessControl $var
     * @return $this
     */
    public function setAccessControl($var)
    {
        GPBUtil::checkMessage($var, \Bloock\AccessControl::class);
        $this->access_control = $var;

        return $this;
    }

}

