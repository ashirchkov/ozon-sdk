<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Http;

use Nyholm\Psr7\Factory\Psr17Factory;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;

class Request
{

    /**
     * @var RequestInterface
     */
    protected RequestInterface $request;
    /**
     * @var UriInterface
     */
    protected UriInterface $uri;

    /**
     * Request constructor.
     */
    public function __construct(string $method, string $uri) {
        $this->uri = (new Psr17Factory())->createUri($uri);
        $this->request = (new Psr17Factory())->createRequest($method, $this->uri);
    }

    /**
     * @param string $method
     * @return Request
     */
    public function setMethod(string $method): Request {
        $this->request = $this->request->withMethod($method);
        return $this;
    }


    /**
     * @param string $name
     * @param string $value
     * @return Request
     */
    public function setHeader(string $name, string $value): Request {
        $this->request = $this->request->withHeader($name, $value);
        return $this;
    }

    /**
     * @param array<string, string> $headers
     * @return Request
     */
    public function setHeaders(array $headers): Request {
        foreach ($headers as $key => $value) {
            $this->request = $this->request->withHeader($key, $value);
        }
        return $this;
    }

    /**
     * @param string $path
     * @return Request
     */
    public function setPath(string $path): Request {
        $this->uri = $this->uri->withPath($path);
        $this->request = $this->request->withUri($this->uri);
        return $this;
    }


    /**
     * @param array $query
     * @return Request
     */
    public function setQuery(array $query = []): Request {
        $this->uri = $this->uri->withQuery(http_build_query($query));
        $this->request = $this->request->withUri($this->uri);
        return $this;
    }

    /**
     * @param array $params
     * @return Request
     */
    public function setBody(array $params): Request {
        $stream = (new Psr17Factory())->createStream(json_encode($params));
        $this->request = $this->request->withBody($stream);
        return $this;
    }

    public function getRequest(): RequestInterface {
        return $this->request;
    }

}
