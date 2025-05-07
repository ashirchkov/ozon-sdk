<?php

namespace AlexeyShirchkov\Ozon\Common\Model;

readonly class ApiErrorDetail implements ModelInterface
{
    public function __construct(
        public string $typeUrl,
        public string $value
    ) {}

}