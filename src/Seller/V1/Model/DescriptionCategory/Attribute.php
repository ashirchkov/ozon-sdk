<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class Attribute extends AbstractModel
{
    /**
     * @param int|null $id
     * @param int|null $dictionary_id
     * @param int|null $group_id
     * @param int|null $attribute_complex_id
     * @param string|null $name
     * @param string|null $description
     * @param string|null $type
     * @param string|null $group_name
     * @param int|null $max_value_count
     * @param bool|null $is_collection
     * @param bool|null $is_required
     * @param bool|null $is_aspect
     * @param bool|null $category_dependent
     * @param bool|null $complex_is_collection
     */
    public function __construct(
        public ?int $id = null,
        public ?int $dictionary_id = null,
        public ?int $group_id = null,
        public ?int $attribute_complex_id = null,
        public ?string $name = null,
        public ?string $description = null,
        public ?string $type = null,
        public ?string $group_name = null,
        public ?int $max_value_count = null,
        public ?bool $is_collection = null,
        public ?bool $is_required = null,
        public ?bool $is_aspect = null,
        public ?bool $category_dependent = null,
        public ?bool $complex_is_collection = null,
    ) {}
}