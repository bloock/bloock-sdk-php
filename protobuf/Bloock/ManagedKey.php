<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: keys_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.ManagedKey</code>
 */
class ManagedKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string key = 2;</code>
     */
    protected $key = '';
    /**
     * Generated from protobuf field <code>.bloock.KeyProtectionLevel protection = 3;</code>
     */
    protected $protection = 0;
    /**
     * Generated from protobuf field <code>.bloock.KeyType key_type = 4;</code>
     */
    protected $key_type = 0;
    /**
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int64 expiration = 6;</code>
     */
    protected $expiration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $key
     *     @type int $protection
     *     @type int $key_type
     *     @type string $name
     *     @type int|string $expiration
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\KeysEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

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
     * Generated from protobuf field <code>.bloock.KeyProtectionLevel protection = 3;</code>
     * @return int
     */
    public function getProtection()
    {
        return $this->protection;
    }

    /**
     * Generated from protobuf field <code>.bloock.KeyProtectionLevel protection = 3;</code>
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
     * Generated from protobuf field <code>.bloock.KeyType key_type = 4;</code>
     * @return int
     */
    public function getKeyType()
    {
        return $this->key_type;
    }

    /**
     * Generated from protobuf field <code>.bloock.KeyType key_type = 4;</code>
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
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
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
     * Generated from protobuf field <code>int64 expiration = 6;</code>
     * @return int|string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Generated from protobuf field <code>int64 expiration = 6;</code>
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
