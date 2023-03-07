<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.Identity</code>
 */
class Identity extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string mnemonic = 1;</code>
     */
    protected $mnemonic = '';
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>string private_key = 3;</code>
     */
    protected $private_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mnemonic
     *     @type string $key
     *     @type string $private_key
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string mnemonic = 1;</code>
     * @return string
     */
    public function getMnemonic()
    {
        return $this->mnemonic;
    }

    /**
     * Generated from protobuf field <code>string mnemonic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMnemonic($var)
    {
        GPBUtil::checkString($var, True);
        $this->mnemonic = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Generated from protobuf field <code>string key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string private_key = 3;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Generated from protobuf field <code>string private_key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

}
