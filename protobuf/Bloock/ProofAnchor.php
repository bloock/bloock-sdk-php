<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: integrity_entities.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.ProofAnchor</code>
 */
class ProofAnchor extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 anchor_id = 1;</code>
     */
    protected $anchor_id = 0;
    /**
     * Generated from protobuf field <code>repeated .bloock.AnchorNetwork networks = 2;</code>
     */
    private $networks;
    /**
     * Generated from protobuf field <code>string root = 3;</code>
     */
    protected $root = '';
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
     *     @type int|string $anchor_id
     *     @type \Bloock\AnchorNetwork[]|\Google\Protobuf\Internal\RepeatedField $networks
     *     @type string $root
     *     @type string $status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IntegrityEntities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 anchor_id = 1;</code>
     * @return int|string
     */
    public function getAnchorId()
    {
        return $this->anchor_id;
    }

    /**
     * Generated from protobuf field <code>int64 anchor_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAnchorId($var)
    {
        GPBUtil::checkInt64($var);
        $this->anchor_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .bloock.AnchorNetwork networks = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworks()
    {
        return $this->networks;
    }

    /**
     * Generated from protobuf field <code>repeated .bloock.AnchorNetwork networks = 2;</code>
     * @param \Bloock\AnchorNetwork[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bloock\AnchorNetwork::class);
        $this->networks = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string root = 3;</code>
     * @return string
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Generated from protobuf field <code>string root = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRoot($var)
    {
        GPBUtil::checkString($var, True);
        $this->root = $var;

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

