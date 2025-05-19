<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ProductsDeactivateRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $action_id
     * @param int[] $product_ids
     */
    public function __construct(
        public int $action_id,
        public array $product_ids,
    ) {}
}