<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_keys_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.ManagedKeyParams</code>
 */
class ManagedKeyParams extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.KeyProtectionLevel protection = 1;</code>
     */
    protected $protection = 0;
    /**
     * Generated from protobuf field <code>.bloock.KeyType key_type = 2;</code>
     */
    protected $key_type = 0;
    /**
     * Generated from protobuf field <code>optional string name = 3;</code>
     */
    protected $name = null;
    /**
     * Generated from protobuf field <code>optional int64 expiration = 4;</code>
     */
    protected $expiration = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $protection
     *     @type int $key_type
     *     @type string $name
     *     @type int|string $expiration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockKeysEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bloock.KeyProtectionLevel protection = 1;</code>
     * @return int
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Generated from protobuf field <code>.bloock.KeyProtectionLevel protection = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setProtection($var)
    {
        GPBUtil::checkEnum($var, \Bloock\KeyProtectionLevel::class);
        $this->protection = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.KeyType key_type = 2;</code>
     * @return int
     */
    public function getKeyType()
    {
        return $this->key_type;
    }

    /**
     * Generated from protobuf field <code>.bloock.KeyType key_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setKeyType($var)
    {
        GPBUtil::checkEnum($var, \Bloock\KeyType::class);
        $this->key_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional string name = 3;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * Generated from protobuf field <code>optional string name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional int64 expiration = 4;</code>
     * @return int|string
     */
    public function getExpiration()
    {
        return isset($this->expiration) ? $this->expiration : 0;
    }

    public function hasExpiration()
    {
        return isset($this->expiration);
    }

    public function clearExpiration()
    {
        unset($this->expiration);
    }

    /**
     * Generated from protobuf field <code>optional int64 expiration = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiration($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiration = $var;

        return $this;
    }

}

