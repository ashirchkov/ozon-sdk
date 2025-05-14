<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class AttributeValuesSearchRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $description_category_id
     * @param int $attribute_id
     * @param int $type_id
     * @param int $limit
     * @param string $value
     */
    public function __construct(
        public int $description_category_id,
        public int $attribute_id,
        public int $type_id,
        public int $limit,
        public string $value,
    ) {}
}