<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class CommentCreateResponse extends AbstractModel implements ApiResponseInterface
{

    public function __construct(
        public string $comment_id
    ) {}

}