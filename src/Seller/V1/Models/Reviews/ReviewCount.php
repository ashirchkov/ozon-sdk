<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews;

use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;

readonly class ReviewCount implements ModelInterface
{

    /**
     * @param int $processed
     * @param int $total
     * @param int $unprocessed
     */
    public function __construct(
        public int $processed,
        public int $total,
        public int $unprocessed,
    ) {}

}