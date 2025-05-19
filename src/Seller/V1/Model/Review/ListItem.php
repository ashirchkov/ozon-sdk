<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewOrderStatus;

readonly class ListItem extends AbstractModel
{

    /**
     * @param string|null $id
     * @param DateTimeImmutable|null $published_at
     * @param int|null $rating
     * @param int|null $sku
     * @param ReviewStatus|null $status
     * @param ReviewOrderStatus|null $order_status
     * @param string|null $text
     * @param bool|null $is_rating_participant
     * @param int|null $comments_amount
     * @param int|null $photos_amount
     * @param int|null $videos_amount
     */
    public function __construct(
        public ?string $id,
        public ?DateTimeImmutable $published_at,
        public ?int $rating,
        public ?int $sku,
        public ?ReviewStatus $status,
        public ?ReviewOrderStatus $order_status,
        public ?string $text,
        public ?bool $is_rating_participant,
        public ?int $comments_amount,
        public ?int $photos_amount,
        public ?int $videos_amount,
    ) {}

}