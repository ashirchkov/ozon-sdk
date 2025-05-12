<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportInfoResult extends AbstractModel
{
    /**
     * @param ImportItem[] $items
     * @param int $total
     */
    public function __construct(
        public array $items,
        public int $total
    ) {}
}