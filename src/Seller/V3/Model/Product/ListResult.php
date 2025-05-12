<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ListResult extends AbstractModel
{
    /**
     * @param ListItem[] $items
     * @param string $last_id
     * @param int $total
     */
    public function __construct(
        public array $items,
        public string $last_id,
        public int $total,
    ) {}
}