<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews;

use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;

readonly class Review implements ModelInterface
{

    /**
     * @param string $id
     * @param string $published_at
     * @param int $rating
     * @param int $sku
     * @param string $status
     * @param string $order_status
     * @param string $text
     * @param bool $is_rating_participant
     * @param int $comments_amount
     * @param int $photos_amount
     * @param int $videos_amount
     * @param array|null $photos
     * @param array|null $videos
     * @param int|null $likes_amount
     * @param int|null $dislikes_amount
     */
    public function __construct(
        public string $id,
        public string $published_at,
        public int    $rating,
        public int    $sku,
        public string $status,
        public string $order_status,
        public string $text,
        public bool   $is_rating_participant,
        public int    $comments_amount,
        public int    $photos_amount,
        public int    $videos_amount,
        public ?array $photos = null,
        public ?array $videos = null,
        public ?int   $likes_amount = null,
        public ?int   $dislikes_amount = null,
    ) {}

}