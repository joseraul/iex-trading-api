<?php

namespace IEXTrading;

use IEXTrading\Resources\Stock;

class Client
{
    /** @var Stock */
    protected $stock_resource;

    /**
     * Client constructor.
     * @param Stock|null $stock_resource
     */
    public function __construct(Stock $stock_resource = null)
    {
        $this->stock_resource = (!$stock_resource) ? new Stock() : $stock_resource;
    }

    /**
     * Return the Stock object.
     *
     * @return Stock
     */
    public function stock()
    {
        return $this->stock_resource;
    }
}
