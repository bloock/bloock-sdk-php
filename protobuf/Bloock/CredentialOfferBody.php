<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.CredentialOfferBody</code>
 */
class CredentialOfferBody extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>repeated .bloock.CredentialOfferBodyCredentials credentials = 2;</code>
     */
    private $credentials;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *     @type \Bloock\CredentialOfferBodyCredentials[]|\Google\Protobuf\Internal\RepeatedField $credentials
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .bloock.CredentialOfferBodyCredentials credentials = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Generated from protobuf field <code>repeated .bloock.CredentialOfferBodyCredentials credentials = 2;</code>
     * @param \Bloock\CredentialOfferBodyCredentials[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCredentials($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bloock\CredentialOfferBodyCredentials::class);
        $this->credentials = $arr;

        return $this;
    }

}

