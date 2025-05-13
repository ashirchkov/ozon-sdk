<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\PictureImportState;

readonly class PicturesImportPicture extends AbstractModel
{
    /**
     * @param int $product_id
     * @param PictureImportState $state
     * @param string $url
     * @param bool $is_primary
     * @param bool $is_360
     * @param bool $is_color
     */
    public function __construct(
        public int $product_id,
        public PictureImportState $state,
        public string $url,
        public bool $is_primary,
        public bool $is_360,
        public bool $is_color
    ) {}
}