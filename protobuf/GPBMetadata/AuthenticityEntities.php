<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authenticity_entities.proto

namespace GPBMetadata;

class AuthenticityEntities
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\KeysEntities::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
authenticity_entities.protobloock"�
Signer
alg (2.bloock.SignerAlg(
	local_key (2.bloock.LocalKeyH �,
managed_key (2.bloock.ManagedKeyH�
common_name (	H�B

_local_keyB
_managed_keyB
_common_name"p
	Signature
	signature (	
	protected (	\'
header (2.bloock.SignatureHeader
message_hash (	"+
SignatureHeader
alg (	
kid (	* 
	SignerAlg

ES256K 
ENSBW
com.bloock.sdk.bridge.protoZ8github.com/bloock/bloock-sdk-go/v2/internal/bridge/protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

