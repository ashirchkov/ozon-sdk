<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DiscountsTaskApproveTask extends AbstractModel
{
    /**
     * @param int $id
     * @param float $approved_price
     * @param int $approved_quantity_min
     * @param int $approved_quantity_max
     * @param string|null $seller_comment
     */
    public function __construct(
        public int $id,
        public float $approved_price,
        public int $approved_quantity_min,
        public int $approved_quantity_max,
        public ?string $seller_comment = null,
    ) {}
}