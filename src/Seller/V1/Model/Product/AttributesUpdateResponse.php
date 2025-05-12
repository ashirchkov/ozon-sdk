<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class AttributesUpdateResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param int $task_id
     */
    public function __construct(
        public int $task_id
    ) {}
}