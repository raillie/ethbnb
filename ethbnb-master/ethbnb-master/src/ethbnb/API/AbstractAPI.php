<?php

namespace ethbnb\API;

use ethbnb\ethbnb;
use Psr\Http\Message\ResponseInterface as GuzzleResponseInterface;
use ethbnb\Response\ResponseInterface as ethbnbResponseInterface;

abstract class AbstractAPI
{
    /**
     * @var ethbnb $client
     */
    protected $client;

    /**
     * @param ethbnb $client
     */
    public function __construct(ethbnb $client)
    {
        $this->client = $client;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param array $parameters
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    protected function getRequest($path, $deserializeTo = null, array $parameters = [], $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->get($path, $deserializeTo, $parameters, $headers);
        return $response;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    protected function postRequest($path, $deserializeTo = null, $body = null, array $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->post($path, $deserializeTo, $body, $headers);
        return $response;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    protected function putRequest($path, $deserializeTo = null, $body = null, array $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->put($path, $deserializeTo, $body, $headers);
        return $response;
    }

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    protected function deleteRequest($path, $deserializeTo = null, $body = null, array $headers = [])
    {
        $httpClient = $this->client->getHttpClient();
        $response = $httpClient->delete($path, $deserializeTo, $body, $headers);
        return $response;
    }
}