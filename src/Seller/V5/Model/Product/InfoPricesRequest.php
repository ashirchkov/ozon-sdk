<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class InfoPricesRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param InfoPricesFilter $filter
     * @param int $limit
     * @param string|null $cursor
     */
    public function __construct(
        public InfoPricesFilter $filter,
        public int $limit,
        public ?string $cursor = null,
    ) {}
}