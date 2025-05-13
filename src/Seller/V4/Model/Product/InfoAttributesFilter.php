<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\VisibilityFilter;

readonly class InfoAttributesFilter
{
    /**
     * @param array|null $offer_id
     * @param array|null $product_id
     * @param array|null $sku
     * @param VisibilityFilter|null $visibility
     */
    public function __construct(
        public ?array $offer_id = null,
        public ?array $product_id = null,
        public ?array $sku = null,
        public ?VisibilityFilter $visibility = null,
    ) {}
}