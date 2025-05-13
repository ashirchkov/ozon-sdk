<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

readonly class RatingBySkuProduct
{
    /**
     * @param int|null $sku
     * @param float|null $rating
     * @param RatingBySkuGroup[]|null $groups
     */
    public function __construct(
        public ?int $sku = null,
        public ?float $rating = null,
        public ?array $groups = null
    ) {}
}