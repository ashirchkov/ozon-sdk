<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V5\Enum\PriceColorIndex;

readonly class InfoPricesItemPriceIndexes extends AbstractModel
{
    /**
     * @param PriceColorIndex|null $color_index
     * @param InfoPricesItemPriceIndexData|null $external_index_data
     * @param InfoPricesItemPriceIndexData|null $ozon_index_data
     * @param InfoPricesItemPriceIndexData|null $self_marketplaces_index_data
     */
    public function __construct(
        public ?PriceColorIndex $color_index = PriceColorIndex::WithoutIndex,
        public ?InfoPricesItemPriceIndexData $external_index_data = null,
        public ?InfoPricesItemPriceIndexData $ozon_index_data = null,
        public ?InfoPricesItemPriceIndexData $self_marketplaces_index_data = null
    ) {}
}