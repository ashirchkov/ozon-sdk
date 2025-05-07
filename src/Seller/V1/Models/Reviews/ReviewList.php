<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews;

use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;

readonly class ReviewList implements ModelInterface
{

    /**
     * @param bool $has_next
     * @param string $last_id
     * @param Review[] $reviews
     */
    public function __construct(
        public bool   $has_next,
        public string $last_id,
        public array  $reviews = [],
    ) {}

}