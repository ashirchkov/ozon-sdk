<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\Currency;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ImportPricesItemAction;

readonly class ImportPricesItem extends AbstractModel
{
    /**
     * @param string|null $offer_id
     * @param int|null $product_id
     * @param Currency|null $currency_code
     * @param string|null $price
     * @param string|null $old_price
     * @param string|null $net_price
     * @param string|null $min_price
     * @param int|null $quant_size
     * @param string|null $vat
     * @param bool|null $min_price_for_auto_actions_enabled
     * @param ImportPricesItemAction $auto_action_enabled
     * @param ImportPricesItemAction $auto_add_to_ozon_actions_list_enabled
     * @param ImportPricesItemAction $price_strategy_enabled
     */
    public function __construct(
        public ?string $offer_id = null,
        public ?int $product_id = null,
        public ?Currency $currency_code = null,
        public ?string $price = null,
        public ?string $old_price = null,
        public ?string $net_price = null,
        public ?string $min_price = null,
        public ?int $quant_size = null,
        public ?string $vat = null,
        public ?bool $min_price_for_auto_actions_enabled = null,
        public ImportPricesItemAction $auto_action_enabled = ImportPricesItemAction::Unknown,
        public ImportPricesItemAction $auto_add_to_ozon_actions_list_enabled = ImportPricesItemAction::Unknown,
        public ImportPricesItemAction $price_strategy_enabled = ImportPricesItemAction::Unknown,
    ) {}
}