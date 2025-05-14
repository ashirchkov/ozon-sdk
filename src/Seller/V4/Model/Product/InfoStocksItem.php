<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoStocksItem extends AbstractModel
{
    /**
     * @param string|null $offer_id
     * @param int|null $product_id
     * @param InfoStocksItemStock[] $stocks
     */
    public function __construct(
        public ?string $offer_id = null,
        public ?int $product_id = null,
        public ?array $stocks = null,
    ) {}
}