<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class PicturesInfoItem extends AbstractModel
{
    /**
     * @param int|null $product_id
     * @param string[]|null $photo
     * @param string[]|null $photo_360
     * @param string[]|null $primary_photo
     * @param string[]|null $color_photo
     */
    public function __construct(
        public ?int $product_id = null,
        public ?array $photo = null,
        public ?array $photo_360 = null,
        public ?array $primary_photo = null,
        public ?array $color_photo = null,
    ) {}
}