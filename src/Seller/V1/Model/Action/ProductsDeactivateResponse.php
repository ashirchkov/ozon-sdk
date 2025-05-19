<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ProductsDeactivateResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param ProductsDeactivateResult $result
     */
    public function __construct(
        public ProductsDeactivateResult $result,
    ) {}
}