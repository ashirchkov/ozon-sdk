<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ImportBySkuResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param ImportBySkuResult $result
     */
    public function __construct(
        public ImportBySkuResult $result,
    ) {}
}