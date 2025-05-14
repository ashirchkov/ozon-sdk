<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Enum\VisibilityFilter;

readonly class InfoPricesFilter extends AbstractModel
{
    /**
     * @param string[] $offer_id
     * @param int[] $product_id
     * @param VisibilityFilter $visibility
     */
    public function __construct(
        public array $offer_id,
        public array $product_id,
        public VisibilityFilter $visibility = VisibilityFilter::All,
    ) {}
}