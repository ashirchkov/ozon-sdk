<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoLimitResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param InfoLimitValue $daily_create
     * @param InfoLimitValue $daily_update
     * @param InfoLimitValue $total
     */
    public function __construct(
        public InfoLimitValue $daily_create,
        public InfoLimitValue $daily_update,
        public InfoLimitValue $total,
    ) {}
}