<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class CommentDeleteRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string $comment_id Идентификатор комментария
     */
    public function __construct(
        public string $comment_id
    ) {}
}