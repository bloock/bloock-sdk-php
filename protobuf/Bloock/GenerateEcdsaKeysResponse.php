<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authenticity.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.GenerateEcdsaKeysResponse</code>
 */
class GenerateEcdsaKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string privateKey = 1;</code>
     */
    protected $privateKey = '';
    /**
     * Generated from protobuf field <code>string publicKey = 2;</code>
     */
    protected $publicKey = '';
    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 3;</code>
     */
    protected $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $privateKey
     *     @type string $publicKey
     *     @type \Bloock\Error $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authenticity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string privateKey = 1;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    /**
     * Generated from protobuf field <code>string privateKey = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->privateKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string publicKey = 2;</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->publicKey;
    }

    /**
     * Generated from protobuf field <code>string publicKey = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->publicKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 3;</code>
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
     * Generated from protobuf field <code>optional .bloock.Error error = 3;</code>
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

