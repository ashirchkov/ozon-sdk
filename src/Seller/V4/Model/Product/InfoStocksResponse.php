<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoStocksResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param InfoStocksItem[] $items
     * @param int $total
     * @param string $cursor
     */
    public function __construct(
        public array $items,
        public int $total,
        public string $cursor,
    ) {}
}