<?php

namespace IEXTrading;

use GuzzleHttp\Client;

abstract class ResourceAbstract
{
    /** @var Client|null */
    protected $http_client;

    /** @var string */
    protected $base_uri = 'https://api.iextrading.com/1.0/';

    /**
     * Resource constructor.
     *
     * ResourceAbstract constructor.
     * @param Client|null $http_client
     */
    public function __construct(Client $http_client = null)
    {
        $this->http_client = (!$http_client) ? new Client(['base_uri' => $this->base_uri]) : $http_client;
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
