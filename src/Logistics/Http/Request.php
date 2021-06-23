<?php

namespace AlexeyShirchkov\Ozon\Logistics\Http;

use AlexeyShirchkov\Ozon\Logistics\Client;
use Nyholm\Psr7\Factory\Psr17Factory;

class Request
{

    protected $client;
    protected $request;
    protected $uri;

    public function __construct(Client $client) {
        $this->client = $client;
        $this->uri = (new Psr17Factory())->createUri($client->getHost());
        $this->request = (new Psr17Factory())->createRequest('GET', $this->uri);
    }

    public function setAuth(string $token, string $prefix = null) {
        $this->setHeader(
            'Authorization',
            is_null($prefix) ? $token : $prefix.' '.$token
        );
        return $this;
    }

    public function setPath(string $path) {
        $this->uri = $this->uri->withPath($path);
        $this->request = $this->request->withUri($this->uri);
        return $this;
    }

    public function setQuery(array $query = []) {
        $this->uri = $this->uri->withQuery(http_build_query($query));
        $this->request = $this->request->withUri($this->uri);
        return $this;
    }

    public function setMethod(string $method) {
        $this->request = $this->request->withMethod($method);
        return $this;
    }

    public function setHeader(string $name, string $value) {
        $this->request = $this->request->withHeader($name, $value);
        return $this;
    }

    public function setBody(array $params) {
        $stream = (new Psr17Factory())->createStream(
            http_build_query($params)
        );
        $this->request = $this->request->withBody($stream);
        return $this;
    }

    public function send() {
        return new Response(
            $this->client->getHttpClient()->sendRequest($this->request)
        );
    }

}