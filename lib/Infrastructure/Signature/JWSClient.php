<?php

namespace Bloock\Infrastructure\Signature;

use Jose\Component\Signature\JWSVerifier;
use Bloock\Config\Repository\ConfigData;
use Bloock\Infrastructure\SigningClient;
use Bloock\Infrastructure\Signature;
use Bloock\Infrastructure\Headers;
use Bloock\Infrastructure\Signature\Exception\InvalidHeaderException;
use Bloock\Infrastructure\Signature\Exception\InvalidPrivateKeyException;
use Bloock\Infrastructure\Signature\Exception\InvalidSignatureException;
use Bloock\Infrastructure\Signature\Exception\PrivateKeyNotFoundException;
use Bloock\Shared\Utils;
use Jose\Component\Core\AlgorithmManager;
use Jose\Component\Signature\Algorithm\ES256K;
use Jose\Component\KeyManagement\JWKFactory;
use Jose\Component\Signature\JWSBuilder;
use Jose\Component\Checker\HeaderCheckerManager;
use Jose\Component\Checker\AlgorithmChecker;
use Jose\Component\Signature\JWSTokenSupport;

use Elliptic\EC;
use Jose\Component\Core\JWK;
use Jose\Component\Signature\JWS;

final class JWSClient implements SigningClient
{

    public function sign(array $payload, string $rawPrivateKey, array $headers = null): Signature
    {
        if (!isset($rawPrivateKey) || $rawPrivateKey == '') {
            throw new PrivateKeyNotFoundException();
        }

        $configData = new ConfigData();
        $ec = new EC($configData->getConfiguration()->ELLIPTIC_CURVE_KEY);

        try {
            $key = $ec->keyFromPrivate($rawPrivateKey);
        } catch (\Throwable $e) {
            throw new InvalidPrivateKeyException();
        }
        $x = $key->getPublic()->getX()->toArray();
        $y = $key->getPublic()->getY()->toArray();

        $publicKey = array(4, ...$x, ...$y);

        $privateKey = $key->getPrivate()->toArray();

        $jwk = $this->generateJWK($publicKey, $privateKey);

        $unprotectedHeader = array(
            Headers::KTY_KEY => $configData->getConfiguration()->KEY_TYPE_ALGORITHM,
            Headers::CRV_KEY => $configData->getConfiguration()->ELLIPTIC_CURVE_KEY,
            Headers::ALG_KEY => $configData->getConfiguration()->SIGNATURE_ALGORITHM,
            Headers::KID_KEY => Utils::bytesToHex($publicKey),
        );
        if (isset($headers)) {
            foreach (array_keys($headers) as $key) {
                $unprotectedHeader[$key] = $headers[$key];
            }
        }

        $algorithmManager = new AlgorithmManager([new ES256K()]);
        $jwsBuilder = new JWSBuilder($algorithmManager);

        $jws = $jwsBuilder
            ->create()
            ->withPayload(Utils::bytesToString($payload))
            ->addSignature($jwk, array(), $unprotectedHeader)
            ->build();

        $signature = $jws->getSignature(0)->getSignature();

        return new Signature(Utils::base64url_encode($signature), $unprotectedHeader);
    }

    public function verify(array $payload, Signature ...$signatures): bool
    {
        $configData = new ConfigData();

        foreach ($signatures as $signature) {
            if (isset($signature->headers['kid'])) {
                $jwk = $this->generateJWK(Utils::hexToBytes($signature->headers['kid']));
                $jws = new JWS(Utils::bytesToString($payload));
                $jws = $jws->addSignature(
                    Utils::base64url_decode($signature->signature),
                    array(),
                    null,
                    $signature->headers
                );

                try {
                    $headerCheckerManager = new HeaderCheckerManager(
                        [new AlgorithmChecker([$configData->getConfiguration()->SIGNATURE_ALGORITHM])],
                        [new JWSTokenSupport()]
                    );
                    $headerCheckerManager->check($jws, 0);
                } catch (\Throwable $e) {
                    throw new InvalidHeaderException($e->getMessage());
                }

                try {
                    $algorithmManager = new AlgorithmManager([new ES256K()]);
                    $jwsVerifier = new JWSVerifier($algorithmManager);
                    if ($jwsVerifier->verifyWithKey($jws, $jwk, 0) == false) {
                        return false;
                    }
                } catch (\Throwable $e) {
                    throw new InvalidSignatureException($e->getMessage());
                }
            } else {
                throw new InvalidHeaderException('kid header not found');
            }
        }

        return true;
    }

    private function generateJWK(array $publicKey, array $privateKey = null): JWK
    {
        $config = new ConfigData();

        $x = Utils::base64url_encode_bytes(array_slice($publicKey, 1, 32));
        $y = Utils::base64url_encode_bytes(array_slice($publicKey, 33, 65));

        $jwk = null;
        if (isset($privateKey)) {
            $privateKey = Utils::base64url_encode_bytes($privateKey);
            $jwk = JWKFactory::createFromValues([
                'crv' => $config->getConfiguration()->ELLIPTIC_CURVE_KEY,
                'kty' => $config->getConfiguration()->KEY_TYPE_ALGORITHM,
                'alg' => $config->getConfiguration()->SIGNATURE_ALGORITHM,
                'd' => $privateKey,
                'x' => $x,
                'y' => $y
            ]);
        } else {
            $jwk = JWKFactory::createFromValues([
                'crv' => $config->getConfiguration()->ELLIPTIC_CURVE_KEY,
                'kty' => $config->getConfiguration()->KEY_TYPE_ALGORITHM,
                'alg' => $config->getConfiguration()->SIGNATURE_ALGORITHM,
                'x' => $x,
                'y' => $y
            ]);
        }

        return $jwk;
    }
}
