<?php

use IEXTrading\Resources\Stock;
use GuzzleHttp\Psr7\Response;

class StockTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Generate the http client mock.
     *
     * @param $response
     * @return \PHPUnit\Framework\MockObject\MockObject
     */
    protected function getHttpClientMock($response)
    {
        $http_client = $this
            ->getMockBuilder(GuzzleHttp\Client::class)
            ->setMethods(['get'])
            ->getMock();

        $http_client
            ->expects($this->once())
            ->method('get')
            ->with('stock/fake-symbol/stats')
            ->willReturn($response);

        return $http_client;
    }

    /** @test */
    public function stats_method_makes_api_call_with_passed_parameters_and_it_returns_filtered_response()
    {
        $response = new Response(200, ['X-Foo' => 'Bar'], json_encode(['fake-response']));

        $http_client_mock = $this->getHttpClientMock($response);

        $client = new Stock($http_client_mock);
        $response = $client->stats('fake-symbol');
        $this->assertEquals(['fake-response'], $response);
    }
}