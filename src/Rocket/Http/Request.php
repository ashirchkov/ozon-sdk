<?php

namespace AlexeyShirchkov\Ozon\Rocket\Http;

use AlexeyShirchkov\Ozon\Rocket\Client;
use Nyholm\Psr7\Factory\Psr17Factory;

abstract class Request
{

    protected $client;
    protected $request;
    protected $uri;

    abstract protected function send(): Response;

    /**
     * Request constructor.
     * @param Client $client
     */
    public function __construct(Client $client) {
        $this->client = $client;
        $this->uri = (new Psr17Factory())->createUri($client->getHost());
        $this->request = (new Psr17Factory())->createRequest('GET', $this->uri);
    }

    /**
     * @param string $path
     * @return Request
     */
    protected function setPath(string $path): Request {
        $this->uri = $this->uri->withPath($path);
        $this->request = $this->request->withUri($this->uri);
        return $this;
    }

    /**
     * @param array $query
     * @return Request
     */
    protected function setQuery(array $query = []): Request {
        $this->uri = $this->uri->withQuery(http_build_query($query));
        $this->request = $this->request->withUri($this->uri);
        return $this;
    }

    /**
     * @param string $method
     * @return Request
     */
    protected function setMethod(string $method): Request {
        $this->request = $this->request->withMethod($method);
        return $this;
    }

    /**
     * @param string $name
     * @param string $value
     * @return Request
     */
    protected function setHeader(string $name, string $value): Request {
        $this->request = $this->request->withHeader($name, $value);
        return $this;
    }

    /**
     * @param array $params
     * @return Request
     */
    protected function setBody(array $params): Request {
        $stream = (new Psr17Factory())->createStream(
            http_build_query($params)
        );
        $this->request = $this->request->withBody($stream);
        return $this;
    }

}