<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

readonly class RatingBySkuGroup
{
    /**
     * @param string|null $key
     * @param string|null $name
     * @param float|null $rating
     * @param float|null $weight
     * @param int|null $improve_at_least
     * @param RatingBySkuGroupImproveAttribute[]|null $improve_attributes
     * @param RatingBySkuGroupCondition[]|null $conditions
     */
    public function __construct(
        public ?string $key = null,
        public ?string $name = null,
        public ?float $rating = null,
        public ?float $weight = null,
        public ?int $improve_at_least = null,
        public ?array $improve_attributes = null,
        public ?array $conditions = null,
    ) {}
}