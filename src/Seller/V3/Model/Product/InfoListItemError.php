<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V3\Enum\ProductErrorLevel;

readonly class InfoListItemError extends AbstractModel
{
    /**
     * @param int|null $attribute_id
     * @param string|null $code
     * @param string|null $field
     * @param ProductErrorLevel|null $level
     * @param string|null $state
     * @param InfoListItemErrorTexts|null $texts
     */
    public function __construct(
        public ?int $attribute_id = null,
        public ?string $code = null,
        public ?string $field = null,
        public ?ProductErrorLevel $level = null,
        public ?string $state = null,
        public ?InfoListItemErrorTexts $texts = null,
    ) {}
}