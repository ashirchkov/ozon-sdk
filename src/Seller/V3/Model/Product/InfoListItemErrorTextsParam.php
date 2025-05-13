<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemErrorTextsParam extends AbstractModel
{
    /**
     * @param string|null $name
     * @param string|null $value
     */
    public function __construct(
        public ?string $name = null,
        public ?string $value = null,
    ) {}
}