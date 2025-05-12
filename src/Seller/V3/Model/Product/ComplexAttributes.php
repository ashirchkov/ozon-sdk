<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ComplexAttributes extends AbstractModel
{
    /**
     * @param Attribute[] $attributes
     */
    public function __construct(
        public array $attributes
    ) {}
}