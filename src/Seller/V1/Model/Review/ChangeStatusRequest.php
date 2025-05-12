<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatus;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ChangeStatusRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string[] $review_ids Массив с идентификаторами отзывов от 1 до 100.
     * @param ReviewStatus $status Статус отзыва: PROCESSED — обработанный, UNPROCESSED — необработанный
     */
    public function __construct(
        public array $review_ids,
        public ReviewStatus $status
    ) {}
}