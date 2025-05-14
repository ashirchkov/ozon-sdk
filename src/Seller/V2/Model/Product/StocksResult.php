<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class StocksResult extends AbstractModel
{
    /**
     * @param int|null $product_id
     * @param int|null $warehouse_id
     * @param string|null $offer_id
     * @param int|null $quant_size
     * @param bool|null $updated
     * @param StocksResultError[]|null $errors
     */
    public function __construct(
        public ?int $product_id = null,
        public ?int $warehouse_id = null,
        public ?string $offer_id = null,
        public ?int $quant_size = null,
        public ?bool $updated = null,
        public ?array $errors = null,
    ) {}
}