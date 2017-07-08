<?php

namespace ethbnb\HttpClient;

use ethbnb\Exception\InvalidArgumentException;
use Guzzle\Http\Message\Response;
use Psr\Http\Message\ResponseInterface as GuzzleResponseInterface;
use ethbnb\Response\ResponseInterface as ethbnbResponseInterface;

interface HttpClientInterface
{
    /**
     * @param $path
     * @param $deserializeTo
     * @param array $parameters
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    public function get($path, $deserializeTo, array $parameters = array(), array $headers = array());

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    public function post($path, $deserializeTo = null, $body = null, array $headers = array());

    /**
     * @param $path
     * @param null $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    public function patch($path, $body = null, array $headers = array());

    /**
     * @param $path
     * @param null $deserializeTo
     * @param $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    public function put($path, $deserializeTo = null, $body, array $headers = array());

    /**
     * @param $path
     * @param null $deserializeTo
     * @param null $body
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    public function delete($path, $deserializeTo = null, $body = null, array $headers = array());

    /**
     * @param $path
     * @param $deserializeTo
     * @param $body
     * @param string $httpMethod
     * @param array $headers
     * @return ethbnbResponseInterface|GuzzleResponseInterface|null
     */
    public function request($path, $deserializeTo, $body, $httpMethod = 'GET', array $headers = array());

    /**
     * Change an option value.
     *
     * @param string $name  The option name
     * @param mixed  $value The value
     *
     * @throws InvalidArgumentException
     */
    public function setOption($name, $value);

    /**
     * Set HTTP headers.
     *
     * @param array $headers
     */
    public function setHeaders(array $headers);
}