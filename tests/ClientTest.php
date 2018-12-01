<?php

use IEXTrading\Client;

class ClientTest extends \PHPUnit\Framework\TestCase
{
    /** @test */
    public function stock_function_returns_stock_resource()
    {
        $client = new Client();
        $this->assertEquals('IEXTrading\Resources\Stock', get_class($client->stock()));
    }
}