<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportInfoResult extends AbstractModel
{
    /**
     * @param ImportInfoItem[]|null $items
     * @param int|null $total
     */
    public function __construct(
        public ?array $items = null,
        public ?int $total = null
    ) {}
}