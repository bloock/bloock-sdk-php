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
�
authenticity_entities.protobloock"�
Signer(
	local_key (2.bloock.LocalKeyH �,
managed_key (2.bloock.ManagedKeyH�8
local_certificate (2.bloock.LocalCertificateH�<
managed_certificate (2.bloock.ManagedCertificateH�&
hash_alg (2.bloock.HashAlgH�2
access_control (2.bloock.AccessControlH�B

_local_keyB
_managed_keyB
_local_certificateB
_managed_certificateB
	_hash_algB
_access_control"�
	Signature
	signature (	
alg (	
kid (	
message_hash (	
subject (	H �
hash_alg (	H�B

_subjectB
	_hash_alg*>
HashAlg
SHA_256 

KECCAK_256
POSEIDON
NONEBW
com.bloock.sdk.bridge.protoZ8github.com/bloock/bloock-sdk-go/v2/internal/bridge/protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

