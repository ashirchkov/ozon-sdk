<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ActionsItem extends AbstractModel
{
    /**
     * @param int|null $id
     * @param string|null $title
     * @param DateTimeImmutable|null $date_start
     * @param DateTimeImmutable|null $date_end
     * @param int|null $potential_products_count
     * @param bool|null $is_participating
     * @param int|null $participating_products_count
     * @param string|null $description
     * @param string|null $action_type
     * @param int|null $banned_products_count
     * @param bool|null $with_targeting
     * @param string|null $discount_type
     * @param float|null $discount_value
     * @param float|null $order_amount
     * @param string|null $freeze_date
     * @param bool|null $is_voucher_action
     */
    public function __construct(
        public ?int $id = null,
        public ?string $title = null,
        public ?DateTimeImmutable $date_start = null,
        public ?DateTimeImmutable $date_end = null,
        public ?int $potential_products_count = null,
        public ?bool $is_participating = null,
        public ?int $participating_products_count = null,
        public ?string $description = null,
        public ?string $action_type = null,
        public ?int $banned_products_count = null,
        public ?bool $with_targeting = null,
        public ?string $discount_type = null,
        public ?float $discount_value = null,
        public ?float $order_amount = null,
        public ?string $freeze_date = null,
        public ?bool $is_voucher_action = null,
    ) {}
}