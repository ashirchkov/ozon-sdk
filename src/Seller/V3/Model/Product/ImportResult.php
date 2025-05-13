<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportResult extends AbstractModel
{
    /**
     * @param int $task_id
     */
    public function __construct(
        public int $task_id,
    ) {}
}