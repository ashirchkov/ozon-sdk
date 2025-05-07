<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Http;

use AlexeyShirchkov\Ozon\Common\Enum\MimeType;
use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;
use LogicException;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Throwable;

/**
 * @template T
 */
class Response
{

    /**
     * @var string
     */
    protected string $body;

    /**
     * @var int
     */
    protected int $status;

    /**
     * @var array|string[][]
     */
    protected array $headers;

    /**
     * @var ResponseInterface
     */
    protected ResponseInterface $response;

    protected SerializerInterface $serializer;


    /**
     * Base constructor.
     * @param ResponseInterface $response
     * @param SerializerInterface $serializer
     */
    public function __construct(ResponseInterface $response, SerializerInterface $serializer) {

        if ($response->getHeaderLine('Content-Type') !== MimeType::ApplicationJson->value) {
            throw new LogicException('Response content is not in JSON format');
        }

        $this->response = $response;
        $this->status = $response->getStatusCode();
        $this->headers = $response->getHeaders();
        $this->body = (string)$response->getBody();

        $this->serializer = $serializer;

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
     * @param $name
     * @return string|null
     */
    public function getHeader($name): ?string {

        $result = null;

        if (array_key_exists($name, $this->headers)) {
            $result = (string)current($this->headers[$name]) ?: '';
        }

        return $result;

    }

    /**
     * @return string
     */
    public function getBody(): string {
        return $this->body;
    }

    /**
     * @return bool
     */
    public function isSuccess(): bool {
        return $this->getStatus() >= 200 && $this->getStatus() <= 299;
    }

    /**
     * @return array
     */
    public function toArray(): array {
        
        $result = json_decode($this->getBody(), true);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new LogicException('JSON decoding error: ' . json_last_error_msg());
        }

        return $result;

    }

    /**
     * @param class-string<T> $modelClass
     * @return T
     */
    public function toModel(string $modelClass) {

        if (!is_subclass_of($modelClass, ModelInterface::class)) {
            throw new LogicException(sprintf('Class %s is not a valid model class.', $modelClass));
        }

        try {
            return $this->serializer->deserialize($this->getBody(), $modelClass, 'json');
        } catch (Throwable $exception) {
            throw new LogicException(
                sprintf('Failed to deserialize response to %s: %s', $modelClass, $exception->getMessage()),
                0,
                $exception
            );
        }

    }

}