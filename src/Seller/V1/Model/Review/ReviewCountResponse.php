<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ReviewCountResponse extends AbstractModel implements ApiResponseInterface
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