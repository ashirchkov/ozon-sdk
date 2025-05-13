<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemErrorTexts extends AbstractModel
{
    /**
     * @param string|null $attribute_name
     * @param string|null $hint_code
     * @param string|null $message
     * @param string|null $description
     * @param string|null $short_description
     * @param InfoListItemErrorTextsParam[]|null $params
     */
    public function __construct(
        public ?string $attribute_name = null,
        public ?string $hint_code = null,
        public ?string $message = null,
        public ?string $description = null,
        public ?string $short_description = null,
        public ?array $params = null,
    ) {}
}