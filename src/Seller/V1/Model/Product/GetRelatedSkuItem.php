<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\RelatedSkuItemAvailability;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\RelatedSkuItemDeliverySchema;

readonly class GetRelatedSkuItem extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param int|null $product_id
     * @param DateTimeImmutable|null $deleted_at
     * @param RelatedSkuItemDeliverySchema|null $delivery_schema
     * @param RelatedSkuItemAvailability|null $availability
     */
    public function __construct(
        public ?int $sku = null,
        public ?int $product_id = null,
        public ?DateTimeImmutable $deleted_at = null,
        public ?RelatedSkuItemDeliverySchema $delivery_schema = null,
        public ?RelatedSkuItemAvailability $availability = null,
    ) {}
}