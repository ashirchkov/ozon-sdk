<?php

namespace AlexeyShirchkov\Ozon\Seller;

readonly class ClientConfiguration
{
    public function __construct(
        public string  $host,
        public ?string $clientId,
        public ?string $apiKey
    ) {}
}