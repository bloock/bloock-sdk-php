<?php

namespace Bloock\Tests;

use Bloock\Config\Entity\Network;
use PHPUnit\Framework\TestCase;

final class NetworkTest extends TestCase
{
    /**
     * @group unit
     */
    public function test_select_network()
    {
        $network = Network::ETHEREUM_RINKEBY;
        $network = Network::SelectNetwork($network);
        $this->assertEquals("ethereum_rinkeby", $network);
    }
    /**
     * @group unit
     */
    public function test_select_network_invalid_input_network()
    {
        $network = "should default to mainnet";
        $network = Network::SelectNetwork($network);
        $this->assertEquals("ethereum_mainnet", $network);
    }
}

