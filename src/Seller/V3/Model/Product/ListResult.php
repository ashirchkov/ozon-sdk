<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ListResult extends AbstractModel
{
    /**
     * @param ListItem[]|null $items
     * @param string|null $last_id
     * @param int|null $total
     */
    public function __construct(
        public ?array $items = null,
        public ?string $last_id = null,
        public ?int $total = null,
    ) {}
}