<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.RecordReceipt</code>
 */
class RecordReceipt extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 anchor = 1;</code>
     */
    protected $anchor = 0;
    /**
     * Generated from protobuf field <code>string client = 2;</code>
     */
    protected $client = '';
    /**
     * Generated from protobuf field <code>string record = 3;</code>
     */
    protected $record = '';
    /**
     * Generated from protobuf field <code>string status = 4;</code>
     */
    protected $status = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $anchor
     *     @type string $client
     *     @type string $record
     *     @type string $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntegrityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 anchor = 1;</code>
     * @return int|string
     */
    public function getAnchor()
    {
        return $this->anchor;
    }

    /**
     * Generated from protobuf field <code>int64 anchor = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAnchor($var)
    {
        GPBUtil::checkInt64($var);
        $this->anchor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string client = 2;</code>
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Generated from protobuf field <code>string client = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setClient($var)
    {
        GPBUtil::checkString($var, True);
        $this->client = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string record = 3;</code>
     * @return string
     */
    public function getRecord()
    {
        return $this->record;
    }

    /**
     * Generated from protobuf field <code>string record = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRecord($var)
    {
        GPBUtil::checkString($var, True);
        $this->record = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 4;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

}
