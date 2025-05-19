<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewOrderStatus;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param string $id
     * @param DateTimeImmutable $published_at
     * @param int $rating
     * @param int $sku
     * @param ReviewStatus $status
     * @param ReviewOrderStatus $order_status
     * @param string $text
     * @param bool $is_rating_participant
     * @param int $comments_amount
     * @param int $photos_amount
     * @param int $videos_amount
     * @param int $likes_amount
     * @param int $dislikes_amount
     * @param InfoPhoto[]|null $photos
     * @param InfoVideo[]|null $videos
     */
    public function __construct(
        public string $id,
        public DateTimeImmutable $published_at,
        public int $rating,
        public int $sku,
        public ReviewStatus $status,
        public ReviewOrderStatus $order_status,
        public string $text,
        public bool $is_rating_participant,
        public int $comments_amount,
        public int $photos_amount,
        public int $videos_amount,
        public int $likes_amount,
        public int $dislikes_amount,
        public ?array $photos = null,
        public ?array $videos = null,
    ) {}

}