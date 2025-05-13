<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class GetRelatedSkuResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param GetRelatedSkuItem[] $items
     * @param GetRelatedSkuError[] $errors
     */
    public function __construct(
        public array $items,
        public array $errors,
    ) {}
}