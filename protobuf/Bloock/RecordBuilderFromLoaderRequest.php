<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_record.proto

namespace Bloock;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bloock.RecordBuilderFromLoaderRequest</code>
 */
class RecordBuilderFromLoaderRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bloock.ConfigData config_data = 1;</code>
     */
    protected $config_data = null;
    /**
     * Generated from protobuf field <code>.bloock.Loader loader = 2;</code>
     */
    protected $loader = null;
    /**
     * Generated from protobuf field <code>optional .bloock.Signer signer = 3;</code>
     */
    protected $signer = null;
    /**
     * Generated from protobuf field <code>optional .bloock.Encrypter encrypter = 4;</code>
     */
    protected $encrypter = null;
    /**
     * Generated from protobuf field <code>optional .bloock.Encrypter decrypter = 5;</code>
     */
    protected $decrypter = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bloock\ConfigData $config_data
     *     @type \Bloock\Loader $loader
     *     @type \Bloock\Signer $signer
     *     @type \Bloock\Encrypter $encrypter
     *     @type \Bloock\Encrypter $decrypter
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\BloockRecord::initOnce();
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
     * Generated from protobuf field <code>.bloock.Loader loader = 2;</code>
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
     * Generated from protobuf field <code>.bloock.Loader loader = 2;</code>
     * @param \Bloock\Loader $var
     * @return $this
     */
    public function setLoader($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Loader::class);
        $this->loader = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Signer signer = 3;</code>
     * @return \Bloock\Signer|null
     */
    public function getSigner()
    {
        return $this->signer;
    }

    public function hasSigner()
    {
        return isset($this->signer);
    }

    public function clearSigner()
    {
        unset($this->signer);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Signer signer = 3;</code>
     * @param \Bloock\Signer $var
     * @return $this
     */
    public function setSigner($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Signer::class);
        $this->signer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Encrypter encrypter = 4;</code>
     * @return \Bloock\Encrypter|null
     */
    public function getEncrypter()
    {
        return $this->encrypter;
    }

    public function hasEncrypter()
    {
        return isset($this->encrypter);
    }

    public function clearEncrypter()
    {
        unset($this->encrypter);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Encrypter encrypter = 4;</code>
     * @param \Bloock\Encrypter $var
     * @return $this
     */
    public function setEncrypter($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Encrypter::class);
        $this->encrypter = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Encrypter decrypter = 5;</code>
     * @return \Bloock\Encrypter|null
     */
    public function getDecrypter()
    {
        return $this->decrypter;
    }

    public function hasDecrypter()
    {
        return isset($this->decrypter);
    }

    public function clearDecrypter()
    {
        unset($this->decrypter);
    }

    /**
     * Generated from protobuf field <code>optional .bloock.Encrypter decrypter = 5;</code>
     * @param \Bloock\Encrypter $var
     * @return $this
     */
    public function setDecrypter($var)
    {
        GPBUtil::checkMessage($var, \Bloock\Encrypter::class);
        $this->decrypter = $var;

        return $this;
    }

}

