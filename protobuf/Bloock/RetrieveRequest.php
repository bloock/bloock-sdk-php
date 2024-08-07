<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_availability.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.RetrieveRequest</code>
 */
class RetrieveRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>.bloock.Loader loader = 3;</code>
     */
    protected $loader = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type \Bloock\Loader $loader
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockAvailability::initOnce();
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
     * Generated from protobuf field <code>.bloock.Loader loader = 3;</code>
     * @return \Bloock\Loader|null
     */
    public function getLoader()
    {
        return $this->loader;
    }

    public function hasLoader()
    {
        return isset($this->loader);
    }

    public function clearLoader()
    {
        unset($this->loader);
    }

    /**
     * Generated from protobuf field <code>.bloock.Loader loader = 3;</code>
     * @param \Bloock\Loader $var
     * @return $this
     */
    public function setLoader($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Loader::class);
        $this->loader = $var;

        return $this;
    }

}

