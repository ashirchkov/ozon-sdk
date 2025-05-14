<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportPricesResult extends AbstractModel
{
    /**
     * @param int|null $product_id
     * @param string|null $offer_id
     * @param bool|null $updated
     * @param ImportPricesResultError[]|null $errors
     */
    public function __construct(
        public ?int $product_id = null,
        public ?string $offer_id = null,
        public ?bool $updated = null,
        public ?array $errors = null,
    ) {}
}