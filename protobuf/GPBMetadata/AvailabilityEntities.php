<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: availability_entities.proto

namespace GPBMetadata;

class AvailabilityEntities
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            "\x0A\x95\x03\x0A\x1Bavailability_entities.proto\x12\x06bloock\"\\\x0A\x09Publisher\x12*\x0A\x04type\x18\x01 \x01(\x0E2\x1C.bloock.DataAvailabilityType\x12#\x0A\x04args\x18\x02 \x01(\x0B2\x15.bloock.PublisherArgs\"\x0F\x0A\x0DPublisherArgs\"V\x0A\x06Loader\x12*\x0A\x04type\x18\x01 \x01(\x0E2\x1C.bloock.DataAvailabilityType\x12 \x0A\x04args\x18\x02 \x01(\x0B2\x12.bloock.LoaderArgs\"\x18\x0A\x0ALoaderArgs\x12\x0A\x0A\x02id\x18\x01 \x01(\x09*,\x0A\x14DataAvailabilityType\x12\x0A\x0A\x06HOSTED\x10\x00\x12\x08\x0A\x04IPFS\x10\x01BW\x0A\x1Bcom.bloock.sdk.bridge.protoZ8github.com/bloock/bloock-sdk-go/v2/internal/bridge/protob\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

