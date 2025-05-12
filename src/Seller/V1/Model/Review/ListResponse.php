<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ListResponse extends AbstractModel implements ApiResponseInterface
{

    /**
     * @param bool $has_next
     * @param string $last_id
     * @param Review[] $reviews
     */
    public function __construct(
        public bool $has_next,
        public string $last_id,
        public array $reviews = [],
    ) {}

}