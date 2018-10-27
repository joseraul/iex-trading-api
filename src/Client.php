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
     * @return Stock
     */
    public function stock()
    {
        return $this->stock_resource;
    }
}
