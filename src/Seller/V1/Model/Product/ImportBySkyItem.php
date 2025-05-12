<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\Currency;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportBySkyItem extends AbstractModel
{
    public function __construct(
        public int $sku,
        public ?string $name = null,
        public ?string $offer_id = null,
        public ?string $price = null,
        public ?Currency $currency_code = null,
        public ?string $old_price = null,
        public ?string $vat = null,
    ) {}
}