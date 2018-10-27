<?php

namespace IEXTrading;

use IEXTrading\Resources\Stock;

class Client
{
    protected $stock_resource;

    public function __construct(Stock $stock_resource = null)
    {
        $this->stock_resource = (!$stock_resource) ? new Stock() : $stock_resource;
    }

    /**
     * @param $symbol
     * @return Stock
     */
    public function stock($symbol)
    {
        return $this->stock_resource;
    }
}
