<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V4\Enum\ProductInfoStocksShipmentType;

readonly class InfoStocksItemStock extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param string|null $type
     * @param ProductInfoStocksShipmentType|null $shipment_type
     * @param int|null $reserved
     * @param int|null $present
     */
    public function __construct(
        public ?int $sku = null,
        public ?string $type = null,
        public ?ProductInfoStocksShipmentType $shipment_type = ProductInfoStocksShipmentType::ShipmentTypeGeneral,
        public ?int $reserved = null,
        public ?int $present = null,
    ) {}
}