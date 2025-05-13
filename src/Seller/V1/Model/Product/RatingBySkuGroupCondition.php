<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

readonly class RatingBySkuGroupCondition
{
    /**
     * @param string|null $key
     * @param float|null $cost
     * @param string|null $description
     * @param bool|null $fulfilled
     */
    public function __construct(
        public ?string $key = null,
        public ?float $cost = null,
        public ?string $description = null,
        public ?bool $fulfilled = null,
    ) {}
}