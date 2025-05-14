<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoStocksByWarehouseFbsResult extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param int|null $product_id
     * @param int|null $warehouse_id
     * @param int|null $present
     * @param int|null $reserved
     * @param string|null $warehouse_name
     */
    public function __construct(
        public ?int $sku = null,
        public ?int $product_id = null,
        public ?int $warehouse_id = null,
        public ?int $present = null,
        public ?int $reserved = null,
        public ?string $warehouse_name = null,
    ) {}
}