<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authenticity.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.GetSignaturesRequest</code>
 */
class GetSignaturesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>.bloock.Record record = 2;</code>
     */
    protected $record = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type \Bloock\Record $record
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Authenticity::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     * @return \Bloock\ConfigData|null
     */
    public function getConfigData()
    {
        return $this->config_data;
    }

    public function hasConfigData()
    {
        return isset($this->config_data);
    }

    public function clearConfigData()
    {
        unset($this->config_data);
    }

    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     * @param \Bloock\ConfigData $var
     * @return $this
     */
    public function setConfigData($var)
    {
        GPBUtil::checkMessage($var, \Bloock\ConfigData::class);
        $this->config_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.bloock.Record record = 2;</code>
     * @return \Bloock\Record|null
     */
    public function getRecord()
    {
        return $this->record;
    }

    public function hasRecord()
    {
        return isset($this->record);
    }

    public function clearRecord()
    {
        unset($this->record);
    }

    /**
     * Generated from protobuf field <code>.bloock.Record record = 2;</code>
     * @param \Bloock\Record $var
     * @return $this
     */
    public function setRecord($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Record::class);
        $this->record = $var;

        return $this;
    }

}

