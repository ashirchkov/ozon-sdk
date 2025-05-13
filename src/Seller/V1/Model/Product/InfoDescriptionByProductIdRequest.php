<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

readonly class InfoDescriptionByProductIdRequest extends InfoDescriptionRequest
{
    /**
     * @param int $product_id
     */
    public function __construct(
        public int $product_id,
    ) {}
}