<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_availability_entities.proto

namespace Bloock;

use UnexpectedValueException;

/**
 * Protobuf type <code>bloock.DataAvailabilityType</code>
 */
class DataAvailabilityType
{
    /**
     * Generated from protobuf enum <code>HOSTED = 0;</code>
     */
    const HOSTED = 0;
    /**
     * Generated from protobuf enum <code>IPFS = 1;</code>
     */
    const IPFS = 1;
    /**
     * Generated from protobuf enum <code>IPNS = 2;</code>
     */
    const IPNS = 2;

    private static $valueToName = [
        self::HOSTED => 'HOSTED',
        self::IPFS => 'IPFS',
        self::IPNS => 'IPNS',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

