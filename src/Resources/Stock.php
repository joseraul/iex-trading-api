<?php

namespace IEXTrading\Resources;

use IEXTrading\ResourceAbstract;

class Stock extends ResourceAbstract
{
    public function stats($symbol)
    {
        $response = $this->http_client
            ->get('stock/'.$symbol.'/stats');

        return $this->filterResponse($response);
    }
}