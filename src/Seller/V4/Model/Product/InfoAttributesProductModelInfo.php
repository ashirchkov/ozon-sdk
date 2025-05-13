<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoAttributesProductModelInfo extends AbstractModel
{
    /**
     * @param int|null $model_id
     * @param int|null $count
     */
    public function __construct(
        public ?int $model_id = null,
        public ?int $count = null,
    ) {}
}