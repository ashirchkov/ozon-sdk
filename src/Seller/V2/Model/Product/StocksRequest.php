<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class StocksRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param StocksItem[] $stocks
     */
    public function __construct(
        public array $stocks
    ) {}
}