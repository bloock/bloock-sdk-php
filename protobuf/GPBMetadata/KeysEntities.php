<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: keys_entities.proto

namespace GPBMetadata;

class KeysEntities
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
keys_entities.protobloock"d
LocalKey
key (	!
key_type (2.bloock.KeyType
private_key (	H �B
_private_key"�
ManagedKeyParams.

protection (2.bloock.KeyProtectionLevel!
key_type (2.bloock.KeyType
name (	H �

expiration (H�B
_nameB
_expiration"�

ManagedKey

id (	
key (	.

protection (2.bloock.KeyProtectionLevel!
key_type (2.bloock.KeyType
name (	

expiration (*^
KeyType
EcP256k 
Rsa2048
Rsa3072
Rsa4096

Aes128

Aes256
Bjj*+
KeyProtectionLevel
SOFTWARE 
HSMBW
com.bloock.sdk.bridge.protoZ8github.com/bloock/bloock-sdk-go/v2/internal/bridge/protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

