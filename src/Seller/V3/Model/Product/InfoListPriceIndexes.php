<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V3\Enum\PriceColorIndex;

readonly class InfoListPriceIndexes extends AbstractModel
{
    /**
     * @param PriceColorIndex|null $color_index
     * @param InfoListPriceIndexData|null $external_index_data
     * @param InfoListPriceIndexData|null $ozon_index_data
     * @param InfoListPriceIndexData|null $self_marketplaces_index_data
     */
    public function __construct(
        public ?PriceColorIndex $color_index = PriceColorIndex::ColorIndexUnspecified,
        public ?InfoListPriceIndexData $external_index_data = null,
        public ?InfoListPriceIndexData $ozon_index_data = null,
        public ?InfoListPriceIndexData $self_marketplaces_index_data = null,
    ) {}
}