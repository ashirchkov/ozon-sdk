<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews;

use AlexeyShirchkov\Ozon\Common\Model\ModelInterface;

readonly class Comment implements ModelInterface
{

    /**
     * @param string $id
     * @param bool $is_official
     * @param bool $is_owner
     * @param string $parent_comment_id
     * @param string $published_at
     * @param string $text
     */
    public function __construct(
        public string $id,
        public bool   $is_official,
        public bool   $is_owner,
        public string $parent_comment_id,
        public string $published_at,
        public string $text,
    ) {}

}