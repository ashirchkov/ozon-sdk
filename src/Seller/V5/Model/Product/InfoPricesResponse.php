<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoPricesResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param InfoPricesItem[] $items
     * @param int $total
     * @param string $cursor
     */
    public function __construct(
        public array $items,
        public int $total,
        public string $cursor,
    ) {}
}