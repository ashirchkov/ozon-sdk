<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Model\ProductAttribute;

readonly class ImportProductComplexAttributes extends AbstractModel
{
    /**
     * @param ProductAttribute[] $attributes
     */
    public function __construct(
        public array $attributes
    ) {}
}