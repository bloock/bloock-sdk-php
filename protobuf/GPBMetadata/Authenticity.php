<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: authenticity.proto

namespace GPBMetadata;

class Authenticity
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\AuthenticityEntities::initOnce();
        \GPBMetadata\RecordEntities::initOnce();
        \GPBMetadata\Shared::initOnce();
        \GPBMetadata\Config::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
authenticity.protobloockrecord_entities.protoshared.protoconfig.proto"C
GenerateEcdsaKeysRequest\'
config_data (2.bloock.ConfigData"o
GenerateEcdsaKeysResponse

privateKey (	
	publicKey (	!
error (2.bloock.ErrorH �B
_error"v
SignRequest\'
config_data (2.bloock.ConfigData
record (2.bloock.Record
signer (2.bloock.Signer"a
SignResponse$
	signature (2.bloock.Signature!
error (2.bloock.ErrorH �B
_error"X
VerifyRequest\'
config_data (2.bloock.ConfigData
record (2.bloock.Record"L
VerifyResponse
valid (!
error (2.bloock.ErrorH �B
_error"y
SignatureCommonNameRequest\'
config_data (2.bloock.ConfigData$
	signature (2.bloock.Signature
hash (	"_
SignatureCommonNameResponse
common_name (	!
error (2.bloock.ErrorH �B
_error"_
GetSignaturesRequest\'
config_data (2.bloock.ConfigData
record (2.bloock.Record"k
GetSignaturesResponse%

signatures (2.bloock.Signature!
error (2.bloock.ErrorH �B
_error2�
AuthenticityServiceX
GenerateEcdsaKeys .bloock.GenerateEcdsaKeysRequest!.bloock.GenerateEcdsaKeysResponse1
Sign.bloock.SignRequest.bloock.SignResponse7
Verify.bloock.VerifyRequest.bloock.VerifyResponseL
GetSignatures.bloock.GetSignaturesRequest.bloock.GetSignaturesResponsea
GetSignatureCommonName".bloock.SignatureCommonNameRequest#.bloock.SignatureCommonNameResponseBW
com.bloock.sdk.bridge.protoZ8github.com/bloock/bloock-sdk-go/v2/internal/bridge/protobproto3'
        , true);

        static::$is_initialized = true;
    }
}

