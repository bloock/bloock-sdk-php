<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_keys_entities.proto

namespace Bloock;

use UnexpectedValueException;

/**
 * Protobuf type <code>bloock.CertificateType</code>
 */
class CertificateType
{
    /**
     * Generated from protobuf enum <code>PEM = 0;</code>
     */
    const PEM = 0;
    /**
     * Generated from protobuf enum <code>PFX = 1;</code>
     */
    const PFX = 1;

    private static $valueToName = [
        self::PEM => 'PEM',
        self::PFX => 'PFX',
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

