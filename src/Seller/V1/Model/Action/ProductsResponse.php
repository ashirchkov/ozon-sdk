<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ProductsResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param ProductsResult $result
     */
    public function __construct(
        public ProductsResult $result,
    ) {}
}