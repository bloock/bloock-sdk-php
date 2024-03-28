<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.Credential</code>
 */
class Credential extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string context = 1;</code>
     */
    private $context;
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>repeated string type = 3;</code>
     */
    private $type;
    /**
     * Generated from protobuf field <code>string issuance_date = 4;</code>
     */
    protected $issuance_date = '';
    /**
     * Generated from protobuf field <code>string expiration = 5;</code>
     */
    protected $expiration = '';
    /**
     * Generated from protobuf field <code>string credential_subject = 6;</code>
     */
    protected $credential_subject = '';
    /**
     * Generated from protobuf field <code>.bloock.CredentialStatus credential_status = 7;</code>
     */
    protected $credential_status = null;
    /**
     * Generated from protobuf field <code>string issuer = 8;</code>
     */
    protected $issuer = '';
    /**
     * Generated from protobuf field <code>.bloock.CredentialSchema credential_schema = 9;</code>
     */
    protected $credential_schema = null;
    /**
     * Generated from protobuf field <code>.bloock.CredentialProof proof = 10;</code>
     */
    protected $proof = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $context
     *     @type string $id
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $type
     *     @type string $issuance_date
     *     @type string $expiration
     *     @type string $credential_subject
     *     @type \Bloock\CredentialStatus $credential_status
     *     @type string $issuer
     *     @type \Bloock\CredentialSchema $credential_schema
     *     @type \Bloock\CredentialProof $proof
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IdentityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string context = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Generated from protobuf field <code>repeated string context = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setContext($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->context = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
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
     * Generated from protobuf field <code>repeated string type = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>repeated string type = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setType($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->type = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string issuance_date = 4;</code>
     * @return string
     */
    public function getIssuanceDate()
    {
        return $this->issuance_date;
    }

    /**
     * Generated from protobuf field <code>string issuance_date = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuanceDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuance_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string expiration = 5;</code>
     * @return string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Generated from protobuf field <code>string expiration = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setExpiration($var)
    {
        GPBUtil::checkString($var, True);
        $this->expiration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string credential_subject = 6;</code>
     * @return string
     */
    public function getCredentialSubject()
    {
        return $this->credential_subject;
    }

    /**
     * Generated from protobuf field <code>string credential_subject = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->credential_subject = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.CredentialStatus credential_status = 7;</code>
     * @return \Bloock\CredentialStatus|null
     */
    public function getCredentialStatus()
    {
        return $this->credential_status;
    }

    public function hasCredentialStatus()
    {
        return isset($this->credential_status);
    }

    public function clearCredentialStatus()
    {
        unset($this->credential_status);
    }

    /**
     * Generated from protobuf field <code>.bloock.CredentialStatus credential_status = 7;</code>
     * @param \Bloock\CredentialStatus $var
     * @return $this
     */
    public function setCredentialStatus($var)
    {
        GPBUtil::checkMessage($var, \Bloock\CredentialStatus::class);
        $this->credential_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string issuer = 8;</code>
     * @return string
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * Generated from protobuf field <code>string issuer = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setIssuer($var)
    {
        GPBUtil::checkString($var, True);
        $this->issuer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.CredentialSchema credential_schema = 9;</code>
     * @return \Bloock\CredentialSchema|null
     */
    public function getCredentialSchema()
    {
        return $this->credential_schema;
    }

    public function hasCredentialSchema()
    {
        return isset($this->credential_schema);
    }

    public function clearCredentialSchema()
    {
        unset($this->credential_schema);
    }

    /**
     * Generated from protobuf field <code>.bloock.CredentialSchema credential_schema = 9;</code>
     * @param \Bloock\CredentialSchema $var
     * @return $this
     */
    public function setCredentialSchema($var)
    {
        GPBUtil::checkMessage($var, \Bloock\CredentialSchema::class);
        $this->credential_schema = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.CredentialProof proof = 10;</code>
     * @return \Bloock\CredentialProof|null
     */
    public function getProof()
    {
        return $this->proof;
    }

    public function hasProof()
    {
        return isset($this->proof);
    }

    public function clearProof()
    {
        unset($this->proof);
    }

    /**
     * Generated from protobuf field <code>.bloock.CredentialProof proof = 10;</code>
     * @param \Bloock\CredentialProof $var
     * @return $this
     */
    public function setProof($var)
    {
        GPBUtil::checkMessage($var, \Bloock\CredentialProof::class);
        $this->proof = $var;

        return $this;
    }

}

