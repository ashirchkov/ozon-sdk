<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class DeleteResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param DeleteStatus[] $status
     */
    public function __construct(
        public array $status
    ) {}
}