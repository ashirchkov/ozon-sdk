<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoSubscriptionResult extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param int|null $count
     */
    public function __construct(
        public ?int $sku = null,
        public ?int $count = null,
    ) {}
}