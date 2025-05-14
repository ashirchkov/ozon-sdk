<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ProductsActivateRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $action_id
     * @param ProductsActivateProduct[] $products
     */
    public function __construct(
        public int $action_id,
        public array $products,
    ) {}
}