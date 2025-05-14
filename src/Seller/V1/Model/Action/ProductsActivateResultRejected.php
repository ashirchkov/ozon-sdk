<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ProductsActivateResultRejected extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param int|null $product_id
     * @param string|null $reason
     */
    public function __construct(
        public ?int $product_id = null,
        public ?string $reason = null
    ) {}
}