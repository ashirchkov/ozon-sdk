<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class StocksItem extends AbstractModel
{
    /**
     * @param int $product_id
     * @param int $warehouse_id
     * @param int $stock
     * @param int $quant_size
     * @param string|null $offer_id
     */
    public function __construct(
        public int $product_id,
        public int $warehouse_id,
        public int $stock,
        public int $quant_size,
        public ?string $offer_id = null,
    ) {}
}