<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ProductsActivateResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param ProductsActivateResult $result
     */
    public function __construct(
        public ProductsActivateResult $result,
    ) {}
}