<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ActionProduct extends AbstractModel
{
    /**
     * @param int|null $id
     * @param float|null $price
     * @param float|null $action_price
     * @param float|null $max_action_price
     * @param string|null $add_mode
     * @param int|null $stock
     * @param int|null $min_stock
     */
    public function __construct(
        public ?int $id = null,
        public ?float $price = null,
        public ?float $action_price = null,
        public ?float $max_action_price = null,
        public ?string $add_mode = null,
        public ?int $stock = null,
        public ?int $min_stock = null,
    ) {}
}
