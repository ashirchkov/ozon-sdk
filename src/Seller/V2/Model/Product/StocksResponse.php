<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class StocksResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param StocksResult[] $result
     */
    public function __construct(
        public array $result
    ) {}
}