<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: bloock_integrity_entities.proto

namespace GPBMetadata;

class BloockIntegrityEntities
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\xFD\x04\x0A\x1Fbloock_integrity_entities.proto\x12\x06bloock\"p\x0A\x06Anchor\x12\x0A\x0A\x02id\x18\x01 \x01(\x03\x12\x13\x0A\x0Bblock_roots\x18\x02 \x03(\x09\x12'\x0A\x08networks\x18\x03 \x03(\x0B2\x15.bloock.AnchorNetwork\x12\x0C\x0A\x04root\x18\x04 \x01(\x09\x12\x0E\x0A\x06status\x18\x05 \x01(\x09\"Y\x0A\x0DAnchorNetwork\x12\x0C\x0A\x04name\x18\x01 \x01(\x09\x12\x0D\x0A\x05state\x18\x02 \x01(\x09\x12\x0F\x0A\x07tx_hash\x18\x03 \x01(\x09\x12\x11\x0A\x04root\x18\x04 \x01(\x09H\x00\x88\x01\x01B\x07\x0A\x05_root\"j\x0A\x05Proof\x12\x0E\x0A\x06leaves\x18\x01 \x03(\x09\x12\x0D\x0A\x05nodes\x18\x02 \x03(\x09\x12\x0D\x0A\x05depth\x18\x03 \x01(\x09\x12\x0E\x0A\x06bitmap\x18\x04 \x01(\x09\x12#\x0A\x06anchor\x18\x05 \x01(\x0B2\x13.bloock.ProofAnchor\"g\x0A\x0BProofAnchor\x12\x11\x0A\x09anchor_id\x18\x01 \x01(\x03\x12'\x0A\x08networks\x18\x02 \x03(\x0B2\x15.bloock.AnchorNetwork\x12\x0C\x0A\x04root\x18\x03 \x01(\x09\x12\x0E\x0A\x06status\x18\x04 \x01(\x09\"O\x0A\x0DRecordReceipt\x12\x0E\x0A\x06anchor\x18\x01 \x01(\x03\x12\x0E\x0A\x06client\x18\x02 \x01(\x09\x12\x0E\x0A\x06record\x18\x03 \x01(\x09\x12\x0E\x0A\x06status\x18\x04 \x01(\x09BW\x0A\x1Bcom.bloock.sdk.bridge.protoZ8github.com/bloock/bloock-sdk-go/v2/internal/bridge/protob\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}
