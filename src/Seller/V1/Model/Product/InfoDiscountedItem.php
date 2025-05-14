<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoDiscountedItem extends AbstractModel
{
    /**
     * @param int|null $discounted_sku
     * @param int|null $sku
     * @param string|null $condition_estimation
     * @param string|null $condition
     * @param string|null $reason_damaged
     * @param string|null $comment_reason_damaged
     * @param string|null $mechanical_damage
     * @param string|null $package_damage
     * @param string|null $shortage
     * @param string|null $repair
     * @param string|null $defects
     * @param string|null $packaging_violation
     * @param string|null $warranty_type
     */
    public function __construct(
        public ?int $discounted_sku = null,
        public ?int $sku = null,
        public ?string $condition_estimation = null,
        public ?string $condition = null,
        public ?string $reason_damaged = null,
        public ?string $comment_reason_damaged = null,
        public ?string $mechanical_damage = null,
        public ?string $package_damage = null,
        public ?string $shortage = null,
        public ?string $repair = null,
        public ?string $defects = null,
        public ?string $packaging_violation = null,
        public ?string $warranty_type = null
    ) {}
}