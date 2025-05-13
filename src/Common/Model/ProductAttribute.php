<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Model;

readonly class ProductAttribute extends AbstractModel
{
    /**
     * @param int|null $id Идентификатор характеристики
     * @param int|null $complex_id Идентификатор характеристики, которая поддерживает вложенные свойства. У каждой из вложенных характеристик может быть несколько вариантов значений
     * @param ProductAttributeValue[]|null $values Массив вложенных значений характеристики
     */
    public function __construct(
        public ?int $id = null,
        public ?int $complex_id = null,
        public ?array $values = null,
    ) {}
}