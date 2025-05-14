<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class TreeNode extends AbstractModel
{
    /**
     * @param int|null $description_category_id
     * @param int|null $type_id
     * @param string|null $category_name
     * @param string|null $type_name
     * @param bool|null $disabled
     * @param TreeNode[]|null $children
     */
    public function __construct(
        public ?int $description_category_id = null,
        public ?int $type_id = null,
        public ?string $category_name = null,
        public ?string $type_name = null,
        public ?bool $disabled = null,
        public ?array $children = null,
    ) {}
}