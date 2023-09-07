<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_v2.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.GetIssuerListResponse</code>
 */
class GetIssuerListResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string did = 1;</code>
     */
    private $did;
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
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $did
     *     @type \Bloock\Error $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string did = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDid()
    {
        return $this->did;
    }

    /**
     * Generated from protobuf field <code>repeated string did = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->did = $arr;

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
