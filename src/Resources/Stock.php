<?php

namespace IEXTrading\Resources;

use IEXTrading\ResourceAbstract;

class Stock extends ResourceAbstract
{
    /**
     * Get information from the Key Stats resource.
     * https://iextrading.com/developer/docs/#key-stats
     *
     * @param $symbol
     * @return mixed
     */
    public function stats($symbol)
    {
        $response = $this->http_client
            ->get('stock/'.$symbol.'/stats');

        return $this->filterResponse($response);
    }
}