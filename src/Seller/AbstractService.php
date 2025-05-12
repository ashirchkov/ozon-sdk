<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller;

use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestInterface;
use AlexeyShirchkov\Ozon\Common\Http\Request;
use Psr\Http\Client\ClientExceptionInterface;
use AlexeyShirchkov\Ozon\Common\Enum\MimeType;
use AlexeyShirchkov\Ozon\Common\Http\Response;
use AlexeyShirchkov\Ozon\Common\Model\ApiError;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use Symfony\Component\Serializer\SerializerInterface;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

class AbstractService
{

    /**
     * @param ClientInterface $client
     * @param ClientConfiguration $configuration
     * @param SerializerInterface $serializer
     */
    public function __construct(
        protected readonly ClientInterface $client,
        protected readonly ClientConfiguration $configuration,
        protected readonly SerializerInterface $serializer
    ) {}

    /**
     * @param HttpMethod $method
     * @param string $uri
     * @param ApiRequestInterface|null $data
     * @return RequestInterface
     */
    protected function makeRequest(HttpMethod $method, string $uri, ?ApiRequestInterface $data = null): RequestInterface {

        $requestBuilder = (new Request($method->value, $this->configuration->host . $uri))
            ->setHeader('Content-Type', MimeType::ApplicationJson->value);

        if (!empty($this->configuration->clientId) && !empty($this->configuration->apiKey)) {
            $requestBuilder->setHeaders([
                'Client-Id' => $this->configuration->clientId,
                'Api-Key' => $this->configuration->apiKey,
            ]);
        }

        if (!is_null($data)) {
            match ($method) {
                HttpMethod::Post, HttpMethod::Put, HttpMethod::Patch, HttpMethod::Delete => $requestBuilder->setBody(json_encode($data)),
                default => $requestBuilder->setQuery(http_build_query($data))
            };
        }

        return $requestBuilder->getRequest();

    }

    /**
     * @throws OzonApiException
     */
    protected function sendRequest(HttpMethod $method, string $uri, ?ApiRequestInterface $data = null): Response {

        try {

            $response = new Response(
                $this->client->sendRequest(
                    $this->makeRequest($method, $uri, $data)
                ),
                $this->serializer
            );

            if (!$response->isSuccess()) {
                $error = $response->toModel(ApiError::class);
                throw new OzonApiException($error->message, $error->code, $error->details);
            }

            return $response;

        } catch (ClientExceptionInterface $exception) {
            throw new OzonApiException($exception->getMessage(), $exception->getCode());
        }

    }

}