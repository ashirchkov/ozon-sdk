<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews;

use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;

readonly class CommentList implements ModelInterface
{

    /**
     * @param Comment[] $comments
     * @param int $offset
     */
    public function __construct(
        public array $comments,
        public int   $offset
    ) {}

}