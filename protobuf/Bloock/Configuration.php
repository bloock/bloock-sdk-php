<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.Configuration</code>
 */
class Configuration extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string library_name = 1;</code>
     */
    protected $library_name = '';
    /**
     * Generated from protobuf field <code>string host = 2;</code>
     */
    protected $host = '';
    /**
     * Generated from protobuf field <code>string api_key = 3;</code>
     */
    protected $api_key = '';
    /**
     * Generated from protobuf field <code>int32 wait_message_interval_factor = 4;</code>
     */
    protected $wait_message_interval_factor = 0;
    /**
     * Generated from protobuf field <code>int32 wait_message_interval_default = 5;</code>
     */
    protected $wait_message_interval_default = 0;
    /**
     * Generated from protobuf field <code>string key_type_algorithm = 6;</code>
     */
    protected $key_type_algorithm = '';
    /**
     * Generated from protobuf field <code>string elliptic_curve_key = 7;</code>
     */
    protected $elliptic_curve_key = '';
    /**
     * Generated from protobuf field <code>string signature_algorithm = 8;</code>
     */
    protected $signature_algorithm = '';
    /**
     * Generated from protobuf field <code>bool disable_analytics = 9;</code>
     */
    protected $disable_analytics = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $library_name
     *     @type string $host
     *     @type string $api_key
     *     @type int $wait_message_interval_factor
     *     @type int $wait_message_interval_default
     *     @type string $key_type_algorithm
     *     @type string $elliptic_curve_key
     *     @type string $signature_algorithm
     *     @type bool $disable_analytics
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string library_name = 1;</code>
     * @return string
     */
    public function getLibraryName()
    {
        return $this->library_name;
    }

    /**
     * Generated from protobuf field <code>string library_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLibraryName($var)
    {
        GPBUtil::checkString($var, True);
        $this->library_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string host = 2;</code>
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>string host = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHost($var)
    {
        GPBUtil::checkString($var, True);
        $this->host = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string api_key = 3;</code>
     * @return string
     */
    public function getApiKey()
    {
        return $this->api_key;
    }

    /**
     * Generated from protobuf field <code>string api_key = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setApiKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->api_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 wait_message_interval_factor = 4;</code>
     * @return int
     */
    public function getWaitMessageIntervalFactor()
    {
        return $this->wait_message_interval_factor;
    }

    /**
     * Generated from protobuf field <code>int32 wait_message_interval_factor = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWaitMessageIntervalFactor($var)
    {
        GPBUtil::checkInt32($var);
        $this->wait_message_interval_factor = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 wait_message_interval_default = 5;</code>
     * @return int
     */
    public function getWaitMessageIntervalDefault()
    {
        return $this->wait_message_interval_default;
    }

    /**
     * Generated from protobuf field <code>int32 wait_message_interval_default = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setWaitMessageIntervalDefault($var)
    {
        GPBUtil::checkInt32($var);
        $this->wait_message_interval_default = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string key_type_algorithm = 6;</code>
     * @return string
     */
    public function getKeyTypeAlgorithm()
    {
        return $this->key_type_algorithm;
    }

    /**
     * Generated from protobuf field <code>string key_type_algorithm = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setKeyTypeAlgorithm($var)
    {
        GPBUtil::checkString($var, True);
        $this->key_type_algorithm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string elliptic_curve_key = 7;</code>
     * @return string
     */
    public function getEllipticCurveKey()
    {
        return $this->elliptic_curve_key;
    }

    /**
     * Generated from protobuf field <code>string elliptic_curve_key = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEllipticCurveKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->elliptic_curve_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string signature_algorithm = 8;</code>
     * @return string
     */
    public function getSignatureAlgorithm()
    {
        return $this->signature_algorithm;
    }

    /**
     * Generated from protobuf field <code>string signature_algorithm = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSignatureAlgorithm($var)
    {
        GPBUtil::checkString($var, True);
        $this->signature_algorithm = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool disable_analytics = 9;</code>
     * @return bool
     */
    public function getDisableAnalytics()
    {
        return $this->disable_analytics;
    }

    /**
     * Generated from protobuf field <code>bool disable_analytics = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableAnalytics($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_analytics = $var;

        return $this;
    }

}

