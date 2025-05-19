<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class CommentListResponse extends AbstractModel implements ApiResponseInterface
{

    /**
     * @param int $offset
     * @param CommentListItem[] $comments
     */
    public function __construct(
        public int $offset,
        public array $comments = []
    ) {}

}