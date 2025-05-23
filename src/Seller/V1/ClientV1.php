<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1;

use Psr\Http\Client\ClientInterface;
use AlexeyShirchkov\Ozon\Seller\ClientConfiguration;
use Symfony\Component\Serializer\SerializerInterface;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ReviewService;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ActionService;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ProductService;

final class ClientV1
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

    /**
     * @return ActionService
     */
    public function action(): ActionService {
        return $this->instances[ActionService::class] ??= new ActionService(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

    /**
     * @return ReviewService
     */
    public function review(): ReviewService {
        return $this->instances[ReviewService::class] ??= new ReviewService(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

}
