<?php

namespace Bloock\Shared;

use Bloock\Record\Entity\Record;
use Exception;

final class Utils
{
    public static function sleep(int $ms)
    {
        sleep($ms / 1000);
    }

    public static function stringify(array $data): string
    {
        return json_encode($data);
    }

    public static function hexToBytes(string $hash): array
    {
        return array_map('hexdec', str_split($hash, 2));
    }

    public static function stringToBytes(string $hash): array
    {
        return array_values(unpack("C*", $hash));
    }

    public static function hexToString(string $hex): string
    {
        return hex2bin($hex);
    }

    public static function bytesToString(array $bytes): string
    {
        $chars = array_map("chr", $bytes);
        return join($chars);
    }

    public static function bytesToHex(array $bytes): string
    {
        $string = Utils::bytesToString($bytes);
        return bin2hex($string);
    }

    public static function hexToUint16(string $hex): array
    {
        if (strlen($hex) % 4 != 0) {
            throw new Exception("Parameter is missing last characters to be represented in uint16.");
        }

        $bytes = Utils::hexToBytes($hex);
        $result = array();
        for ($i = 0; $i < count($bytes) / 2; $i++) {
            $result[$i] = $bytes[$i * 2 + 1] + ($bytes[$i * 2] << 8);
        }

        return $result;
    }

    public static function merge(array $left, array $right): array
    {
        $concat = array_merge($left, $right);
        return Record::fromUint8Array($concat)->getUint8ArrayHash();
    }

    public static function isHex($string): bool
    {
        return ctype_xdigit($string);
    }
}
