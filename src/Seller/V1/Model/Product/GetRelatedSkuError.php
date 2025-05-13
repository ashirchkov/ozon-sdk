<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class GetRelatedSkuError extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param string|null $code
     * @param string|null $message
     */
    public function __construct(
        public ?int $sku = null,
        public ?string $code = null,
        public ?string $message = null,
    ) {}
}