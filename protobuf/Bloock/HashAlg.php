<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authenticity_entities.proto

namespace Bloock;

use UnexpectedValueException;

/**
 * Protobuf type <code>bloock.HashAlg</code>
 */
class HashAlg
{
    /**
     * Generated from protobuf enum <code>SHA_256 = 0;</code>
     */
    const SHA_256 = 0;
    /**
     * Generated from protobuf enum <code>KECCAK_256 = 1;</code>
     */
    const KECCAK_256 = 1;
    /**
     * Generated from protobuf enum <code>POSEIDON = 2;</code>
     */
    const POSEIDON = 2;
    /**
     * Generated from protobuf enum <code>NONE = 3;</code>
     */
    const NONE = 3;

    private static $valueToName = [
        self::SHA_256 => 'SHA_256',
        self::KECCAK_256 => 'KECCAK_256',
        self::POSEIDON => 'POSEIDON',
        self::NONE => 'NONE',
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

