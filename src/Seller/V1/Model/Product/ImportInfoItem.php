<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Seller\V1\Enum\TaskStatus;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportInfoItem extends AbstractModel
{
    /**
     * @param string|null $offer_id
     * @param int|null $product_id
     * @param TaskStatus|null $status
     * @param ImportInfoItemError[]|null $errors
     */
    public function __construct(
        public ?string $offer_id = null,
        public ?int $product_id = null,
        public ?TaskStatus $status = null,
        public ?array $errors = null,
    ) {}
}