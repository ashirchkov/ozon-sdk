<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V3\Enum\ListFilterVisibility;

readonly class ListFilter extends AbstractModel
{
    /**
     * @param string[]|null $offer_id
     * @param string[]|null $product_id
     * @param ListFilterVisibility|null $visibility
     */
    public function __construct(
        public ?array $offer_id = null,
        public ?array $product_id = null,
        public ?ListFilterVisibility $visibility = null,
    ) {}
}