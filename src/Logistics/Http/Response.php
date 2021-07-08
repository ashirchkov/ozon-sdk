<?php

namespace AlexeyShirchkov\Ozon\Logistics\Http;

use AlexeyShirchkov\Ozon\Common\Enums\MimeTypes;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

abstract class Response
{

    protected $body;

    protected $status;

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
        $this->body = (string) $response->getBody();

        if (
            !\in_array($this->body, ['', 'null', 'true', 'false'], true) &&
            0 === \strpos($response->getHeaderLine('Content-type'), MimeTypes::JSON_CONTENT_TYPE)
        ) {
            $this->result = $this->serializer->deserialize($this->body, 'array', 'json');
        }

    }

    /**
     * @return int
     */
    public function getStatus(): int {
        return $this->status;
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
     * @return bool
     */
    public function isSuccess() {
        return $this->getStatus() >= 200 && $this->getStatus() <= 299 && empty($this->getErrors());
    }

    /**
     * @return mixed
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * @param string $format
     * @return mixed
     */
    public function getFormatResult(string $format) {
        return $this->serializer->deserialize($this->body, $format, 'json');
    }

}