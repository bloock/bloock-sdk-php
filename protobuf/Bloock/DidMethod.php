<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_entities.proto

namespace Bloock;

use UnexpectedValueException;

/**
 * Protobuf type <code>bloock.DidMethod</code>
 */
class DidMethod
{
    /**
     * Generated from protobuf enum <code>POLYGON_ID = 0;</code>
     */
    const POLYGON_ID = 0;
    /**
     * Generated from protobuf enum <code>POLYGON_ID_TEST = 1;</code>
     */
    const POLYGON_ID_TEST = 1;

    private static $valueToName = [
        self::POLYGON_ID => 'POLYGON_ID',
        self::POLYGON_ID_TEST => 'POLYGON_ID_TEST',
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

