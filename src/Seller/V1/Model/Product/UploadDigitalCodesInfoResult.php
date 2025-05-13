<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Seller\V1\Enum\TaskStatus;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class UploadDigitalCodesInfoResult extends AbstractModel
{
    /**
     * @param TaskStatus|null $status
     */
    public function __construct(
        public ?TaskStatus $status = null
    ) {}
}