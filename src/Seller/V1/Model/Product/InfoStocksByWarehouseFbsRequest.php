<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class InfoStocksByWarehouseFbsRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int[] $sku
     */
    public function __construct(
        public array $sku
    ) {}
}