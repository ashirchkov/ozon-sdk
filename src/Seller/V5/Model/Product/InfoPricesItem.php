<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPricesItem extends AbstractModel
{
    /**
     * @param string|null $offer_id
     * @param int|null $product_id
     * @param float|null $acquiring
     * @param InfoPricesItemCommission|null $commissions
     * @param InfoPricesItemPrice|null $price
     * @param InfoPricesItemPriceIndexes|null $price_indexes
     * @param InfoPricesItemMarketingActions|null $marketing_actions
     * @param float|null $volume_weight
     */
    public function __construct(
        public ?string $offer_id = null,
        public ?int $product_id = null,
        public ?float $acquiring = null,
        public ?InfoPricesItemCommission $commissions = null,
        public ?InfoPricesItemPrice $price = null,
        public ?InfoPricesItemPriceIndexes $price_indexes = null,
        public ?InfoPricesItemMarketingActions $marketing_actions = null,
        public ?float $volume_weight = null
    ) {}
}