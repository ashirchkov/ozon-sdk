<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1;

use AlexeyShirchkov\Ozon\Seller\ClientConfiguration;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ReviewsService;
use Psr\Http\Client\ClientInterface;
use Symfony\Component\Serializer\SerializerInterface;

final readonly class Client
{

    /**
     * @param ClientInterface $httpClient
     * @param ClientConfiguration $configuration
     * @param SerializerInterface|null $serializer
     */
    public function __construct(
        private ClientInterface      $httpClient,
        private ClientConfiguration  $configuration,
        private ?SerializerInterface $serializer = null
    ) {}

    /**
     * @return ReviewsService
     */
    public function reviews(): ReviewsService {
        return new ReviewsService($this->httpClient, $this->configuration, $this->serializer);
    }

}
