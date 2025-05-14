<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\Currency;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPricesItemPriceIndexData extends AbstractModel
{
    /**
     * @param string|null $minimal_price
     * @param Currency|null $minimal_price_currency
     * @param float|null $price_index_value
     */
    public function __construct(
        public ?string $minimal_price = null,
        public ?Currency $minimal_price_currency = null,
        public ?float $price_index_value = null,
    ) {}
}