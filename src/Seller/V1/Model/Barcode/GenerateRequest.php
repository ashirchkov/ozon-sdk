<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class GenerateRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int[] $product_ids
     */
    public function __construct(
        public array $product_ids
    ) {}
}