<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DiscountsTaskListItem extends AbstractModel
{
    /**
     * @param int|null $id
     * @param int|null $sku
     * @param int|null $prev_task_id
     * @param string|null $offer_id
     * @param DateTimeImmutable|null $created_at
     * @param DateTimeImmutable|null $end_at
     * @param DateTimeImmutable|null $edited_till
     * @param DateTimeImmutable|null $moderated_at
     * @param string|null $status
     * @param bool|null $is_damaged
     * @param bool|null $is_purchased
     * @param bool|null $is_auto_moderated
     * @param string|null $customer_name
     * @param string|null $email
     * @param string|null $last_name
     * @param string|null $first_name
     * @param string|null $patronymic
     * @param string|null $user_comment
     * @param string|null $seller_comment
     * @param float|null $original_price
     * @param float|null $requested_price
     * @param float|null $approved_price
     * @param float|null $base_price
     * @param float|null $min_auto_price
     * @param float|null $requested_price_with_fee
     * @param float|null $approved_price_with_fee
     * @param float|null $discount
     * @param float|null $discount_percent
     * @param float|null $approved_discount
     * @param float|null $approved_discount_percent
     * @param float|null $approved_price_fee_percent
     * @param int|null $requested_quantity_min
     * @param int|null $requested_quantity_max
     * @param int|null $approved_quantity_min
     * @param int|null $approved_quantity_max
     */
    public function __construct(
        public ?int $id = null,
        public ?int $sku = null,
        public ?int $prev_task_id = null,
        public ?string $offer_id = null,
        public ?DateTimeImmutable $created_at = null,
        public ?DateTimeImmutable $end_at = null,
        public ?DateTimeImmutable $edited_till = null,
        public ?DateTimeImmutable $moderated_at = null,
        public ?string $status = null,
        public ?bool $is_damaged = null,
        public ?bool $is_purchased = null,
        public ?bool $is_auto_moderated = null,
        public ?string $customer_name = null,
        public ?string $email = null,
        public ?string $last_name = null,
        public ?string $first_name = null,
        public ?string $patronymic = null,
        public ?string $user_comment = null,
        public ?string $seller_comment = null,
        public ?float $original_price = null,
        public ?float $requested_price = null,
        public ?float $approved_price = null,
        public ?float $base_price = null,
        public ?float $min_auto_price = null,
        public ?float $requested_price_with_fee = null,
        public ?float $approved_price_with_fee = null,
        public ?float $discount = null,
        public ?float $discount_percent = null,
        public ?float $approved_discount = null,
        public ?float $approved_discount_percent = null,
        public ?float $approved_price_fee_percent = null,
        public ?int $requested_quantity_min = null,
        public ?int $requested_quantity_max = null,
        public ?int $approved_quantity_min = null,
        public ?int $approved_quantity_max = null,
    ) {}
}