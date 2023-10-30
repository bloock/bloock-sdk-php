<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.SignatureHeaderJWS</code>
 */
class SignatureHeaderJWS extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string alg = 1;</code>
     */
    protected $alg = '';
    /**
     * Generated from protobuf field <code>string kid = 2;</code>
     */
    protected $kid = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $alg
     *     @type string $kid
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string alg = 1;</code>
     * @return string
     */
    public function getAlg()
    {
        return $this->alg;
    }

    /**
     * Generated from protobuf field <code>string alg = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAlg($var)
    {
        GPBUtil::checkString($var, True);
        $this->alg = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string kid = 2;</code>
     * @return string
     */
    public function getKid()
    {
        return $this->kid;
    }

    /**
     * Generated from protobuf field <code>string kid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKid($var)
    {
        GPBUtil::checkString($var, True);
        $this->kid = $var;

        return $this;
    }

}

