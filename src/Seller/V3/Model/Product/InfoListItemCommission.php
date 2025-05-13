<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemCommission extends AbstractModel
{
    /**
     * @param float|null $delivery_amount
     * @param float|null $percent
     * @param float|null $return_amount
     * @param string|null $sale_schema
     * @param float|null $value
     */
    public function __construct(
        public ?float $delivery_amount = null,
        public ?float $percent = null,
        public ?float $return_amount = null,
        public ?string $sale_schema = null,
        public ?float $value = null,
    ) {}
}