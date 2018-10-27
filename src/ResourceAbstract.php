<?php

namespace IEXTrading;

use GuzzleHttp\Client;

abstract class ResourceAbstract
{
    protected $http_client;

    /**
     * Client constructor.
     */
    public function __construct()
    {
        $this->http_client = new Client([
            'base_uri' => 'https://api.iextrading.com/1.0/'
        ]);
    }

    /**
     * Filter the response, try to maintain the original format.
     *
     * @param \Psr\Http\Message\ResponseInterface
     * @return mixed
     */
    protected function filterResponse(\Psr\Http\Message\ResponseInterface $response)
    {
        return json_decode($response->getBody()->getContents(), true);
    }
}
