<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ImportRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param ImportProduct[] $items
     */
    public function __construct(
        public array $items
    ) {}
}