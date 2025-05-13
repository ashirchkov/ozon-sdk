<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoAttributesProductPdfList extends AbstractModel
{
    /**
     * @param string|null $file_name
     * @param string|null $name
     */
    public function __construct(
        public ?string $file_name = null,
        public ?string $name = null,
    ) {}
}