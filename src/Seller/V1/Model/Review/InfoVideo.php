<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoVideo extends AbstractModel
{
    /**
     * @param string|null $url
     * @param int|null $width
     * @param int|null $height
     * @param string|null $preview_url
     * @param string|null $short_video_preview_url
     */
    public function __construct(
        public ?string $url = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?string $preview_url = null,
        public ?string $short_video_preview_url = null,
    ) {}
}