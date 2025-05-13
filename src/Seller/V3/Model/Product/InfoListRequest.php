<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class InfoListRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param array|null $offer_id
     * @param array|null $product_id
     * @param array|null $sku
     */
    public function __construct(
        public ?array $offer_id = null,
        public ?array $product_id = null,
        public ?array $sku = null,
    ) {}
}