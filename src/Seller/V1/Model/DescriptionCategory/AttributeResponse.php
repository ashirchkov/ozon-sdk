<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class AttributeResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param Attribute[] $result
     */
    public function __construct(
        public array $result
    ) {}
}