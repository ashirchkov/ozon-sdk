<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoAttributesResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param InfoAttributesProduct[] $result
     * @param string $last_id
     * @param int $total
     */
    public function __construct(
        public array $result = [],
        public string $last_id,
        public int $total,
    ) {}
}