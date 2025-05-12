<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller;

readonly class ClientConfiguration
{
    public function __construct(
        public string $host,
        public ?string $clientId,
        public ?string $apiKey
    ) {}
}