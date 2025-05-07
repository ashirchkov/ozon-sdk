<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews;

use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;

readonly class CommentCreate implements ModelInterface
{

    public function __construct(
        public string $comment_id
    ) {}

}