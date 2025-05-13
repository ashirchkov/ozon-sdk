<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportBySkuResult extends AbstractModel
{
    /**
     * @param int|null $task_id
     * @param int[]|null $unmatched_sku_list
     */
    public function __construct(
        public ?int $task_id = null,
        public ?array $unmatched_sku_list = null
    ) {}
}