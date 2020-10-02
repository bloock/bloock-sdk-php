<?php


namespace Bloock\Tests;

use Bloock\Infrastructure\Hashing;
use Bloock\Infrastructure\Hashing\Keccak;
use PHPUnit\Framework\TestCase;

final class KeccakTest extends TestCase
{
    private Hashing $hashingClient;

    protected function setUp(): void
    {
        $this->hashingClient = new Keccak();
    }
    /**
     * @group unit
     */
    public function test_keccak_1()
    {
        $hash = $this->hashingClient->generateHash("Test Data");
        $this->assertEquals('e287462a142cd6237de5a89891ad82065f6aca6644c161b1a61c933c5d26117a', $hash);
    }
}
