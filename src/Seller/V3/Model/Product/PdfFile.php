<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class PdfFile extends AbstractModel
{
    /**
     * @param int|null $index
     * @param string|null $name
     * @param string|null $src_url
     */
    public function __construct(
        public ?int $index = null,
        public ?string $name = null,
        public ?string $src_url = null,
    ) {}
}