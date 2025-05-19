<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ProductsDeactivateResult extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param array|null $product_ids
     * @param ProductsDeactivateResultRejected|null $rejected
     */
    public function __construct(
        public ?array $product_ids = null,
        public ?ProductsDeactivateResultRejected $rejected = null
    ) {}
}