<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class InfoStocksRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param InfoStocksFilter $filter
     * @param int $limit
     * @param string|null $cursor
     */
    public function __construct(
        public InfoStocksFilter $filter,
        public int $limit,
        public ?string $cursor = null,
    ) {}
}