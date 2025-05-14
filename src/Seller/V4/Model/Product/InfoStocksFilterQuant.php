<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoStocksFilterQuant extends AbstractModel
{
    /**
     * @param bool|null $created
     * @param bool|null $exists
     */
    public function __construct(
        public ?bool $created = null,
        public ?bool $exists = null,
    ) {}
}