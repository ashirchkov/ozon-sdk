<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemModelInfo extends AbstractModel
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