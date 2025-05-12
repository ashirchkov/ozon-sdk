<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ImportInfoRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string $task_id Код задачи на импорт товаров
     */
    public function __construct(
        public string $task_id
    ) {}
}
