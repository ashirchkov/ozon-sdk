<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class UploadDigitalCodesResult extends AbstractModel
{
    /**
     * @param int|null $task_id
     */
    public function __construct(
        public ?int $task_id = null
    ) {}
}