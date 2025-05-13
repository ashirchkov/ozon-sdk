<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DeleteProduct extends AbstractModel
{
    /**
     * @param string $offer_id
     */
    public function __construct(
        public string $offer_id
    ) {}
}