<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoListResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param InfoListItem[] $items
     */
    public function __construct(
        public array $items
    ) {}
}