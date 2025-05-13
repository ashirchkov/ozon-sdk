<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

readonly class RatingBySkuGroupImproveAttribute
{
    /**
     * @param int|null $id
     * @param string|null $name
     */
    public function __construct(
        public ?int $id = null,
        public ?string $name = null,
    ) {}
}