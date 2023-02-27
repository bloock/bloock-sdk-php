<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.CredentialOfferToJsonResponse</code>
 */
class CredentialOfferToJsonResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string json = 1;</code>
     */
    protected $json = '';
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
     *     @type string $json
     *     @type \Bloock\Error $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Identity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string json = 1;</code>
     * @return string
     */
    public function getJson()
    {
        return $this->json;
    }

    /**
     * Generated from protobuf field <code>string json = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->json = $var;

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

