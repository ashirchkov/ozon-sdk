<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPhoto extends AbstractModel
{
    /**
     * @param string|null $url
     * @param int|null $width
     * @param int|null $height
     */
    public function __construct(
        public ?string $url = null,
        public ?int $width = null,
        public ?int $height = null,
    ) {}
}