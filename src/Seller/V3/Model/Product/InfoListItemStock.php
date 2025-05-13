<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Seller\V3\Enum\Source;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemStock extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param int|null $reserved
     * @param int|null $present
     * @param Source|null $source
     */
    public function __construct(
        public ?int $sku = null,
        public ?int $reserved = null,
        public ?int $present = null,
        public ?Source $source = null,
    ) {}
}