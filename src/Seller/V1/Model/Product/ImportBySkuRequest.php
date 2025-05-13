<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ImportBySkuRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param ImportBySkyItem[]|null $items
     */
    public function __construct(
        public ?array $items = null
    ) {}
}