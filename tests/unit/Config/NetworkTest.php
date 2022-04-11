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
        $networks = array(array('name'=>Network::ETHEREUM_RINKEBY));
        $network = Network::SelectNetwork($networks);
        $this->assertEquals("ethereum_rinkeby", $network);
    }
    /**
     * @group unit
     */
    public function test_select_network_invalid_input_network()
    {
        $networks = array(array('name'=>"should default to mainnet"));
        $network = Network::SelectNetwork($networks);
        $this->assertEquals("ethereum_mainnet", $network);
    }
}

