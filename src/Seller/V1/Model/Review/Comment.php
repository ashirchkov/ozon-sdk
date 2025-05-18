<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class Comment extends AbstractModel
{

    /**
     * @param string $id
     * @param bool $is_official
     * @param bool $is_owner
     * @param string $parent_comment_id
     * @param DateTimeImmutable $published_at
     * @param string $text
     */
    public function __construct(
        public string $id,
        public bool $is_official,
        public bool $is_owner,
        public string $parent_comment_id,
        public DateTimeImmutable $published_at,
        public string $text,
    ) {}

}