<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3;

use Psr\Http\Client\ClientInterface;
use AlexeyShirchkov\Ozon\Seller\ClientConfiguration;
use Symfony\Component\Serializer\SerializerInterface;
use AlexeyShirchkov\Ozon\Seller\V3\Service\ProductService;

final class ClientV3
{

    /**
     * @var array
     */
    private array $instances = [];

    /**
     * @param ClientInterface $httpClient
     * @param ClientConfiguration $configuration
     * @param SerializerInterface $serializer
     */
    public function __construct(
        readonly private ClientInterface $httpClient,
        readonly private ClientConfiguration $configuration,
        readonly private SerializerInterface $serializer
    ) {}

    /**
     * @return ProductService
     */
    public function product(): ProductService {
        return $this->instances[ProductService::class] ??= new ProductService(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

}
