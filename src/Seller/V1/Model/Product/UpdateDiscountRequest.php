<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class UpdateDiscountRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $product_id
     * @param int $discount
     */
    public function __construct(
        public int $product_id,
        public int $discount,
    ) {}
}