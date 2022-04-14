<?php

namespace Bloock\Infrastructure\Signature;

use Bloock\Config\entity\Configuration;
use Bloock\Infrastructure\SigningClient;
use Bloock\Infrastructure\Signature\Headers;
use Bloock\Infrastructure\Signature\Exception\PrivateKeyNotFoundException;

use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Signature\Algorithm\ES256K;
use Jose\Component\KeyManagement\JWKFactory;
use Jose\Component\Core\JWK;
use Jose\Component\Signature\Serializer\JSONFlattenedSerializer;
use Jose\Component\Signature\JWSBuilder;


final class JWSClient implements SigningClient {

    public function JWSSign(string $rawPrivateKey, string $payload, array $headers = null): Signature 
    {
        if (!isset($rawPrivateKey) || $rawPrivateKey == '') {
            throw new PrivateKeyNotFoundException();
        }

        $privateKey = $this->serializePrivateKey($rawPrivateKey);
        $publicKey = $this->generatePublicKey($privateKey);

        $unprotectedHeader = array(
            Headers::KTY_KEY => Configuration::KEY_TYPE_ALGORITHM,
            Headers::CRV_KEY => Configuration::ELLIPTIC_CURVE_KEY,
            Headers::ALG_KEY => Configuration::SIGNATURE_ALGORITHM,
            Headers::KID_KEY => $publicKey
        );
        foreach (array_keys($headers) as $key) {
            $unprotectedHeader[$key] = $headers[$key];
        }
        
        $algorithmManager = new AlgorithmManager([new ES256K()]);
        $jwsBuilder = new JWSBuilder($algorithmManager);

        $jws = $jwsBuilder
            ->create()
            ->withPayload($payload)
            ->addSignature($privateKey, $unprotectedHeader);
        
        $serializer = new JSONFlattenedSerializer;

        $signature = $serializer->serialize($jws->build(), 0)['signature'];
        return new Signature($signature, $unprotectedHeader);
    }

    // TODO
    public function JWSVerify(array $payload, array $signatures): array
    {
        foreach ($signatures as $signature) {
            if (isset($signature->getHeaders()[Headers::KID_KEY])) {
                $publicKey = new JWK([
                    'kty' => 'ES256K',
                    'k' => $signatures->getHeaders()[Headers::KID_KEY]

                ]);

                return array();
            }
            return array();
        }
    }

    private function serializePrivateKey(string $rawPrivateKey): JWK 
    {
        /*
        Functions already tried:
            -openssl_pkey_export
            -concatenating manually PEM prefix and suffix
        but they require an encoded PEM key, not raw key.


        */

        //Requires a key Object (created with openssl)
        //in: PEM KEY. out: JWK
        $privateKey = JWKFactory::createFromKey($success);
        return $privateKey;
        /*
        return new JWK([
            'kty' => 'EC',
            'k' => $rawPrivateKey,
            'x' => 1,
            'y' => 2,
            'crv' => Configuration::ELLIPTIC_CURVE_KEY,
        ]);
        */
    }

    private function generatePublicKey(JWK $privateKey): string 
    {
        return $privateKey->toPublic()->all()['k'];
    }
}