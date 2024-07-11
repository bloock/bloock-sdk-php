<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_keys.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.RecoverTotpAccessControlResponse</code>
 */
class RecoverTotpAccessControlResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string secret = 1;</code>
     */
    protected $secret = '';
    /**
     * Generated from protobuf field <code>string secret_qr = 2;</code>
     */
    protected $secret_qr = '';
    /**
     * Generated from protobuf field <code>repeated string recovery_codes = 3;</code>
     */
    private $recovery_codes;
    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 4;</code>
     */
    protected $error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $secret
     *     @type string $secret_qr
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $recovery_codes
     *     @type \Bloock\Error $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockKeys::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string secret = 1;</code>
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Generated from protobuf field <code>string secret = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string secret_qr = 2;</code>
     * @return string
     */
    public function getSecretQr()
    {
        return $this->secret_qr;
    }

    /**
     * Generated from protobuf field <code>string secret_qr = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecretQr($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret_qr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string recovery_codes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRecoveryCodes()
    {
        return $this->recovery_codes;
    }

    /**
     * Generated from protobuf field <code>repeated string recovery_codes = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRecoveryCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->recovery_codes = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Error error = 4;</code>
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
     * Generated from protobuf field <code>optional .bloock.Error error = 4;</code>
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

