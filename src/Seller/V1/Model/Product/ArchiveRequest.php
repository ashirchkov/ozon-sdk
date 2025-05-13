<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ArchiveRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int[] $product_id
     */
    public function __construct(
        public array $product_id
    ) {}
}