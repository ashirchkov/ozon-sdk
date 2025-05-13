<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoAttributesResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param string $last_id
     * @param int $total
     * @param InfoAttributesProduct[] $result
     */
    public function __construct(
        public string $last_id,
        public int $total,
        public array $result = [],
    ) {}
}