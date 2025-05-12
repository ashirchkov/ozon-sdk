<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class CommentCreateRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string $review_id Идентификатор отзыва
     * @param string $text Текст комментария
     * @param bool|null $mark_review_as_processed Обновление статуса у отзыва: true — статус изменится на Processed, false — статус не изменится
     * @param string|null $parent_comment_id Идентификатор родительского комментария, на который вы отвечаете
     */
    public function __construct(
        public string $review_id,
        public string $text,
        public ?bool $mark_review_as_processed = null,
        public ?string $parent_comment_id = null
    ) {}
}