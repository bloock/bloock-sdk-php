<?php

use Bloock\Bloock;
use Bloock\Client\AvailabilityClient;
use Bloock\Client\RecordClient;
use Bloock\Entity\Availability\HostedLoader;
use Bloock\Entity\Availability\HostedPublisher;
use Bloock\Entity\Availability\IpfsLoader;
use Bloock\Entity\Availability\IpfsPublisher;
use PHPUnit\Framework\TestCase;
use Bloock\Client\KeyClient;
use Bloock\Entity\Availability\IpnsKey;
use Bloock\Entity\Availability\IpnsPublisher;
use Bloock\Entity\Key\KeyProtectionLevel;
use Bloock\Entity\Key\KeyType;
use Bloock\Entity\Key\ManagedKeyParams;

final class AvailabilityTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        Bloock::$apiKey = getenv("DEV_API_KEY");
        Bloock::$apiHost = getenv("DEV_API_HOST");
    }

    public function testPublishHosted()
    {
        $payload = "Hello world";
        $recordClient = new RecordClient();

        $record = $recordClient->fromString($payload)->build();

        $availabilityClient = new AvailabilityClient();
        $result = $availabilityClient->publish($record, new HostedPublisher());

        $this->assertNotNull($result);
    }

    public function testRetrieveHosted()
    {
        $payload = "Hello world";
        $recordClient = new RecordClient();

        $record = $recordClient->fromString($payload)->build();
        $recordHash = $record->getHash();

        $availabilityClient = new AvailabilityClient();
        $result = $availabilityClient->publish($record, new HostedPublisher());

        $result = $availabilityClient->retrieve(new HostedLoader($result));

        $this->assertEquals($recordHash, $result->getHash());
    }

    public function testPublishIpfs()
    {
        $payload = "Hello world";
        $recordClient = new RecordClient();

        $record = $recordClient->fromString($payload)->build();

        $availabilityClient = new AvailabilityClient();
        $result = $availabilityClient->publish($record, new IpfsPublisher());

        $this->assertNotNull($result);
    }

    public function testRetrieveIpfs()
    {
        $payload = "Hello world";
        $recordClient = new RecordClient();

        $record = $recordClient->fromString($payload)->build();
        $recordHash = $record->getHash();

        $availabilityClient = new AvailabilityClient();
        $result = $availabilityClient->publish($record, new IpfsPublisher());

        $result = $availabilityClient->retrieve(new IpfsLoader($result));

        $this->assertEquals($recordHash, $result->getHash());
    }

    public function testPublishIpns()
    {
        $keyClient = new KeyClient();

        $keyName = "ipns_key_name_test_sdk";
        $keyProtection = KeyProtectionLevel::SOFTWARE;
        $keyType = KeyType::Rsa2048;

        $params = new ManagedKeyParams($keyProtection, $keyType, $keyName);
        $key = $keyClient->newManagedKey($params);

        $payload = "Hello world";
        $recordClient = new RecordClient();

        $record = $recordClient->fromString($payload)->build();

        $availabilityClient = new AvailabilityClient();
        $result = $availabilityClient->publish($record, new IpnsPublisher(new IpnsKey($key)));
        $this->assertNotNull($result);
    }
}