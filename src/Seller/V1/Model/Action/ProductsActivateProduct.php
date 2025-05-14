<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ProductsActivateProduct extends AbstractModel
{
    /**
     * @param int $product_id
     * @param float $action_price
     * @param int|null $stock
     */
    public function __construct(
        public int $product_id,
        public float $action_price,
        public ?int $stock = null,
    ) {}
}