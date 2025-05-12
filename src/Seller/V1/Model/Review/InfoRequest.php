<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class InfoRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string $review_id Идентификатор отзыва
     */
    public function __construct(
        public string $review_id
    ) {}
}