<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Enum\Language;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class AttributeValuesRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $description_category_id
     * @param int $attribute_id
     * @param int $type_id
     * @param int $limit
     * @param Language $language
     * @param int|null $last_value_id
     */
    public function __construct(
        public int $description_category_id,
        public int $attribute_id,
        public int $type_id,
        public int $limit,
        public Language $language = Language::Default,
        public ?int $last_value_id = null,
    ) {}
}