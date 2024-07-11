<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_keys_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.LocalCertificate</code>
 */
class LocalCertificate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bytes pkcs12 = 1;</code>
     */
    protected $pkcs12 = '';
    /**
     * Generated from protobuf field <code>string password = 2;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pkcs12
     *     @type string $password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockKeysEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bytes pkcs12 = 1;</code>
     * @return string
     */
    public function getPkcs12()
    {
        return $this->pkcs12;
    }

    /**
     * Generated from protobuf field <code>bytes pkcs12 = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPkcs12($var)
    {
        GPBUtil::checkString($var, False);
        $this->pkcs12 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Generated from protobuf field <code>string password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

