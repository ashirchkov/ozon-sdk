<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class AttributesUpdateRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string $offer_id Идентификатор товара в системе продавца — артикул
     * @param array|null $attributes Характеристики товара
     */
    public function __construct(
        public string $offer_id,
        public ?array $attributes = null
    ) {}
}