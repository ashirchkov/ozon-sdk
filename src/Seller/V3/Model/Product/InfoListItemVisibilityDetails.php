<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemVisibilityDetails extends AbstractModel
{
    /**
     * @param bool|null $has_price
     * @param bool|null $has_stock
     */
    public function __construct(
        public ?bool $has_price = null,
        public ?bool $has_stock = null,
    ) {}
}