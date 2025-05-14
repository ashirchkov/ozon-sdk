<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class AttributeValue extends AbstractModel
{
    /**
     * @param int|null $id
     * @param string|null $info
     * @param string|null $picture
     * @param string|null $value
     */
    public function __construct(
        public ?int $id = null,
        public ?string $info = null,
        public ?string $picture = null,
        public ?string $value = null,
    ) {}
}