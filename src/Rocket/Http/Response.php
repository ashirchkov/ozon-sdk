<?php

namespace AlexeyShirchkov\Ozon\Rocket\Http;

use AlexeyShirchkov\Ozon\Common\Enums\MimeTypes;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

abstract class Response
{

    protected $body;

    protected $status;

    protected $headers;

    protected $errors = [];

    protected $result;

    protected $serializer;


    /**
     * Base constructor.
     * @param ResponseInterface $response
     */
    public function __construct(ResponseInterface $response) {

        $this->serializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(
                new IdenticalPropertyNamingStrategy()
            )
            ->build();

        $this->status = $response->getStatusCode();
        $this->headers = $response->getHeaders();
        $this->body = $result = (string) $response->getBody();

        if (
            !\in_array($result, ['', 'null', 'true', 'false'], true) &&
            0 === \strpos($response->getHeaderLine('Content-type'), MimeTypes::JSON_CONTENT_TYPE)
        ) {
            $result = $this->serializer->deserialize($result, 'array', 'json');
        }

        $this->result = $result;

    }

    /**
     * @return int
     */
    public function getStatus(): int {
        return $this->status;
    }

    /**
     * @return string[][]
     */
    public function getHeaders(): array {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getBody() {
        return $this->body;
    }

    /**
     * @return array
     */
    public function getErrors(): array {
        return $this->errors;
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function getResult(string $format = '') {
        return empty($format) ? $this->result : $this->serializer->deserialize($this->body, $format, 'json');
    }

    /**
     * @return bool
     */
    public function isSuccess() {
        return $this->getStatus() >= 200 && $this->getStatus() <= 299 && empty($this->getErrors());
    }

}