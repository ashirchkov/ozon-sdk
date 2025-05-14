<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller;

use Psr\Http\Client\ClientInterface;
use AlexeyShirchkov\Ozon\Seller\V1\ClientV1;
use AlexeyShirchkov\Ozon\Seller\V2\ClientV2;
use AlexeyShirchkov\Ozon\Seller\V3\ClientV3;
use AlexeyShirchkov\Ozon\Seller\V4\ClientV4;
use AlexeyShirchkov\Ozon\Seller\V5\ClientV5;
use Symfony\Component\Serializer\SerializerInterface;

final class Client
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
     * @return ClientV1
     */
    public function v1(): ClientV1 {
        return $this->instances[ClientV1::class] ??= new ClientV1(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

    /**
     * @return ClientV2
     */
    public function v2(): ClientV2 {
        return $this->instances[ClientV2::class] ??= new ClientV2(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

    /**
     * @return ClientV3
     */
    public function v3(): ClientV3 {
        return $this->instances[ClientV3::class] ??= new ClientV3(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

    /**
     * @return ClientV4
     */
    public function v4(): ClientV4 {
        return $this->instances[ClientV4::class] ??= new ClientV4(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

    /**
     * @return ClientV5
     */
    public function v5(): ClientV5 {
        return $this->instances[ClientV5::class] ??= new ClientV5(
            $this->httpClient, $this->configuration, $this->serializer
        );
    }

}