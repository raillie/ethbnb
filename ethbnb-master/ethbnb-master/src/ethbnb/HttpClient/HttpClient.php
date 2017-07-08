<?php

namespace ethbnb\HttpClient;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client as GuzzleClient;
use JMS\Serializer\SerializerBuilder;

class HttpClient implements HttpClientInterface
{
    /**
     * @var array $options
     */
    protected $options = [
        'base_uri'    => 'https://api.ethbnb.com/v2/',
        'user_agent'  => 'peggy (http://github.com/raillie/ethbnb)',
        'timeout'     => 10,
        'api_limit'   => 5000,
        'api_version' => 'v2',
        'cache_dir'   => null
    ];

    /**
     * @var array $headers
     */
    protected $headers = [];

    /**
     * @var string $apiKey
     */
    private $apiKey;

    private $lastResponse;

    private $lastRequest;

    /**
     * @var GuzzleClient $client
     */
    private $client;

    /**
     * @param string $apiKey
     * @param array $options
     * @param ClientInterface $client
     */
    public function __construct($apiKey, array $options = array(), ClientInterface $client = null)
    {
        $this->apiKey = $apiKey;
        $this->options = array_merge($this->options, $options);
        if (!$client) {
            $client = new GuzzleClient($this->options);
        }
        $this->client = $client;
        $this->clearHeaders();
    }

    /**
     * @param string $name
     * @param mixed $value
     */
    public function setOption($name, $value)
    {
        $this->options[$name] = $value;
    }

    /**
     * @param array $headers
     */
    public function setHeaders(array $headers)
    {
        $this->headers = array_merge($this->headers, $headers);
    }

    public function clearHeaders()
    {
        $this->headers = array(
            'Accept' => sprintf('application/vnd.github.%s+json', $this->options['api_version']),
            'User-Agent' => sprintf('%s', $this->options['user_agent']),
        );
    }

    public function get($path, $deserializeTo = null, array $parameters = array(), array $headers = array())
    {
        return $this->request($path, $deserializeTo, null, 'GET', $headers, array('query' => $parameters));
    }

    public function post($path, $deserializeTo = null, $body = null, array $headers = array())
    {
        return $this->request($path, $deserializeTo, $body, 'POST', $headers);
    }

    public function patch($path, $body = null, array $headers = array())
    {
        return $this->request($path, $body, 'PATCH', $headers);
    }

    public function delete($path, $deserializeTo = null, $body = null, array $headers = array())
    {
        return $this->request($path, $deserializeTo, $body, 'DELETE', $headers);
    }

    public function put($path, $deserializeTo = null, $body, array $headers =  array())
    {
        return $this->request($path, $deserializeTo, $body, 'PUT', $headers);
    }

    public function request($path, $deserializeTo = null, $body = null, $httpMethod = 'GET', array $headers = array(), array $options = array())
    {
        $serializer = SerializerBuilder::create()->build();
        if ($body != null) {
            $body = $serializer->serialize($body, 'json');
        }

        $query = $options['query'];
        $options = array_merge($query, ['client_id' => $this->apiKey]);
        $path = $path . "?" . http_build_query($options);

        $request = new Request($httpMethod, $path, $headers, $body);
        $response = $this->client->send($request);

        $contents = $response->getBody()->getContents();
        $response = $serializer->deserialize($contents, $deserializeTo, 'json');

        $this->lastRequest = $request;
        $this->lastResponse = $response;

        return $response;
    }

    public function getLastRequest()
    {
        return $this->lastRequest;
    }

    public function getLastResponse()
    {
        return $this->lastResponse;
    }
}