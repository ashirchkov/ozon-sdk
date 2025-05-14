<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Enum\VisibilityFilter;

readonly class InfoStocksFilter extends AbstractModel
{
    /**
     * @param int[]|null $product_id
     * @param string[]|null $offer_id
     * @param InfoStocksFilterQuant|null $with_quant
     * @param VisibilityFilter|null $visibility
     */
    public function __construct(
        public ?array $product_id = null,
        public ?array $offer_id = null,
        public ?InfoStocksFilterQuant $with_quant = null,
        public ?VisibilityFilter $visibility = VisibilityFilter::All,
    ) {}
}