<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class CommentListResponse extends AbstractModel implements ApiResponseInterface
{

    /**
     * @param Comment[] $comments
     * @param int $offset
     */
    public function __construct(
        public array $comments,
        public int $offset
    ) {}

}