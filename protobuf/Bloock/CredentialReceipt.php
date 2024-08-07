<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_identity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.CredentialReceipt</code>
 */
class CredentialReceipt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.Credential credential = 1;</code>
     */
    protected $credential = null;
    /**
     * Generated from protobuf field <code>string credential_id = 2;</code>
     */
    protected $credential_id = '';
    /**
     * Generated from protobuf field <code>string credential_type = 3;</code>
     */
    protected $credential_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\Credential $credential
     *     @type string $credential_id
     *     @type string $credential_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockIdentityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bloock.Credential credential = 1;</code>
     * @return \Bloock\Credential|null
     */
    public function getCredential()
    {
        return $this->credential;
    }

    public function hasCredential()
    {
        return isset($this->credential);
    }

    public function clearCredential()
    {
        unset($this->credential);
    }

    /**
     * Generated from protobuf field <code>.bloock.Credential credential = 1;</code>
     * @param \Bloock\Credential $var
     * @return $this
     */
    public function setCredential($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Credential::class);
        $this->credential = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string credential_id = 2;</code>
     * @return string
     */
    public function getCredentialId()
    {
        return $this->credential_id;
    }

    /**
     * Generated from protobuf field <code>string credential_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialId($var)
    {
        GPBUtil::checkString($var, True);
        $this->credential_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string credential_type = 3;</code>
     * @return string
     */
    public function getCredentialType()
    {
        return $this->credential_type;
    }

    /**
     * Generated from protobuf field <code>string credential_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialType($var)
    {
        GPBUtil::checkString($var, True);
        $this->credential_type = $var;

        return $this;
    }

}

