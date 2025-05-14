<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class AttributeValuesResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param AttributeValue[] $result
     * @param bool $has_next
     */
    public function __construct(
        public array $result,
        public bool $has_next
    ) {}
}