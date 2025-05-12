<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class AttributeValue extends AbstractModel
{
    /**
     * @param int|null $dictionary_value_id Идентификатор характеристики в словаре
     * @param string|null $value Значение характеристики товара
     */
    public function __construct(
        public ?int $dictionary_value_id = null,
        public ?string $value = null,
    ) {}
}