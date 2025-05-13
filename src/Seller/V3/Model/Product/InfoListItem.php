<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Enum\Currency;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItem extends AbstractModel
{
    /**
     * @param int|null $id
     * @param string|null $offer_id
     * @param int|null $type_id
     * @param DateTimeImmutable|null $created_at
     * @param DateTimeImmutable|null $updated_at
     * @param string|null $price
     * @param string|null $old_price
     * @param string|null $marketing_price
     * @param string|null $min_price
     * @param Currency|null $currency_code
     * @param InfoListItemStocks|null $stocks
     * @param int|null $discounted_fbo_stocks
     * @param bool|null $has_discounted_fbo_item
     * @param float|null $volume_weight
     * @param string[]|null $images
     * @param string[]|null $images360
     * @param string[]|null $primary_image
     * @param string[]|null $color_image
     * @param InfoListItemStatuses|null $statuses
     * @param bool|null $is_archived
     * @param bool|null $is_autoarchived
     * @param bool|null $is_discounted
     * @param bool|null $is_kgt
     * @param bool|null $is_prepayment_allowed
     * @param bool|null $is_super
     * @param InfoListItemError[]|null $errors
     * @param string|null $name
     * @param int|null $description_category_id
     * @param string[]|null $barcodes
     * @param InfoListItemCommission[]|null $commissions
     * @param InfoListItemModelInfo|null $model_info
     * @param InfoListPriceIndexes|null $price_indexes
     * @param InfoListItemSource[]|null $sources
     * @param InfoListItemVisibilityDetails|null $visibility_details
     * @param string|null $vat
     */
    public function __construct(
        public ?int $id = null,
        public ?string $offer_id = null,
        public ?int $type_id = null,
        public ?DateTimeImmutable $created_at = null,
        public ?DateTimeImmutable $updated_at = null,
        public ?string $price = null,
        public ?string $old_price = null,
        public ?string $marketing_price = null,
        public ?string $min_price = null,
        public ?Currency $currency_code = null,
        public ?InfoListItemStocks $stocks = null,
        public ?int $discounted_fbo_stocks = null,
        public ?bool $has_discounted_fbo_item = null,
        public ?float $volume_weight = null,
        public ?array $images = null,
        public ?array $images360 = null,
        public ?array $primary_image = null,
        public ?array $color_image = null,
        public ?InfoListItemStatuses $statuses = null,
        public ?bool $is_archived = null,
        public ?bool $is_autoarchived = null,
        public ?bool $is_discounted = null,
        public ?bool $is_kgt = null,
        public ?bool $is_prepayment_allowed = null,
        public ?bool $is_super = null,
        public ?array $errors = null,
        public ?string $name = null,
        public ?int $description_category_id = null,
        public ?array $barcodes = null,
        public ?array $commissions = null,
        public ?InfoListItemModelInfo $model_info = null,
        public ?InfoListPriceIndexes $price_indexes = null,
        public ?array $sources = null,
        public ?InfoListItemVisibilityDetails $visibility_details = null,
        public ?string $vat = null
    ) {}
}