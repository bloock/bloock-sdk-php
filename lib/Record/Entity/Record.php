<?php

namespace Bloock\Record\Entity;

use Bloock\Infrastructure\Hashing;
use Bloock\Infrastructure\Hashing\Keccak;
use Bloock\Shared\Utils;

/**
 * Record is the class in charge of computing and storing the
 * value of the data sent to Bloock.
 * This class is intended to be used by calling "from" static
 * methods to create instances of Record.
 */
class Record
{
    private $hash;

    public static $hashingAlgorithm;

    private function __construct(string $hash)
    {
        $this->hash = $hash;
    }

    /**
     * Given an JSON object, returns a Record with its value hashed.
     *
     * @param  array $object
     * @return Record Record object of the hashed input.
     */
    public static function fromArray(array $object): Record
    {
        return Record::fromString(Utils::stringify($object));
    }

    /**
     * Given a value already hashed creates a Record containing it.
     *
     * @param  mixed Hexadecimal string without prefix and length 64.
     * @return Record Record object of the hashed input.
     */
    public static function fromHash(string $hash): Record
    {
        return new Record($hash);
    }

    /**
     * Given a hexadecimal string (with no 0x prefix) returns a Record with its value hashed.
     *
     * @param  string Hexadecimal string without prefix.
     * @return Record Record object of the hashed input.
     */
    public static function fromHex(string $hex): Record
    {
        $dataArray = Utils::hexToString($hex);
        return new Record(Record::getHashingAlgorithm()->generateHash($dataArray));
    }

    /**
     * Given a string returns a Record with its value hashed.
     *
     * @param  mixed String object.
     * @return Record Record object of the hashed input.
     */
    public static function fromString(string $string): Record
    {
        return new Record(Record::getHashingAlgorithm()->generateHash($string));
    }

    /**
     * Given a bytes object returns a Record with its value hashed.
     *
     * @param  array Bytes object.
     * @return Record Record object of the hashed input.
     */
    public static function fromUint8Array(array $dataArray): Record
    {
        $data = Utils::bytesToString($dataArray);
        return new Record(Record::getHashingAlgorithm()->generateHash($data));
    }

    /**
     * Given a Record returns True if its contents are valid to be sent to Bloock's API or False otherwise.
     *
     * @param  mixed Record object.
     * @return bool Boolean indicating if the Record is susceptible to be sent (True) or not (False).
     */
    public static function isValid($record): bool
    {
        if ($record instanceof Record) {
            $_record = $record->getHash();
            if ($_record != null && strlen($_record) == 64 && Utils::isHex($_record)) {
                return true;
            }
        }

        return false;
    }

    public static function sort(array $records): array
    {
        $keys = [];
        foreach ($records as $key => $record) {
            if ($record instanceof Record) {
                $keys[$key] = $record->getHash();
            }
        }

        array_multisort($keys, SORT_ASC, $records);

        return $records;
    }

    /**
     * Returns the hashed representation of the Record string.
     *
     * @return string String containing the Record hash as a hexadecimal (with no "0x" prefix).
     */
    public function getHash(): string
    {
        return $this->hash;
    }

    /**
     * Returns the Record signed with the specified private key
     *
     * @param  string Private key to sign with.
     * @return Record Record object of the signed input.
     */
    public function sign(string $privateKey): Record
    {
        return Record::fromHash($this->hash);
    }

    public function getUint8ArrayHash(): array
    {
        return Utils::hexToBytes($this->hash);
    }

    private static function getHashingAlgorithm(): Hashing
    {
        return Record::$hashingAlgorithm;
    }
}

Record::$hashingAlgorithm = new Keccak();
