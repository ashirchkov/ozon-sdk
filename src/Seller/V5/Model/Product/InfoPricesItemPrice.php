<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\Currency;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPricesItemPrice extends AbstractModel
{
    /**
     * @param bool|null $auto_action_enabled
     * @param bool|null $auto_add_to_ozon_actions_list_enabled
     * @param Currency|null $currency_code
     * @param float|null $marketing_price
     * @param float|null $marketing_seller_price
     * @param float|null $min_price
     * @param float|null $old_price
     * @param float|null $price
     * @param float|null $retail_price
     * @param float|null $vat
     */
    public function __construct(
        public ?bool $auto_action_enabled = null,
        public ?bool $auto_add_to_ozon_actions_list_enabled = null,
        public ?Currency $currency_code = null,
        public ?float $marketing_price = null,
        public ?float $marketing_seller_price = null,
        public ?float $min_price = null,
        public ?float $old_price = null,
        public ?float $price = null,
        public ?float $retail_price = null,
        public ?float $vat = null
    ) {}
}