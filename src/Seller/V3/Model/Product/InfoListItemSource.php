<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Seller\V3\Enum\Source;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V3\Enum\ShipmentType;

readonly class InfoListItemSource extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param DateTimeImmutable|null $created_at
     * @param Source|null $source
     * @param ShipmentType|null $shipment_type
     * @param string|null $quant_code
     */
    public function __construct(
        public ?int $sku = null,
        public ?DateTimeImmutable $created_at = null,
        public ?Source $source = null,
        public ?ShipmentType $shipment_type = ShipmentType::ShipmentTypeUnspecified,
        public ?string $quant_code = null,
    ) {}
}