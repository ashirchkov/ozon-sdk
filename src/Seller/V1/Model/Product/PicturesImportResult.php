<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class PicturesImportResult extends AbstractModel
{
    /**
     * @param PicturesImportPicture[]|null $pictures
     */
    public function __construct(
        public ?array $pictures = null
    ) {}
}