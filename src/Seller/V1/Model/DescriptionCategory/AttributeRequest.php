<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Enum\Language;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class AttributeRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $description_category_id
     * @param int $type_id
     * @param Language $language
     */
    public function __construct(
        public int $description_category_id,
        public int $type_id,
        public Language $language = Language::Default
    ) {}
}