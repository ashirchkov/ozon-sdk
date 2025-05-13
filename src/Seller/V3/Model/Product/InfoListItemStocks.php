<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemStocks extends AbstractModel
{
    /**
     * @param bool|null $has_stock
     * @param InfoListItemStock[]|null $stocks
     */
    public function __construct(
        public ?bool $has_stock = null,
        public ?array $stocks = null,
    ) {}
}