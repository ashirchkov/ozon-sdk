<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ProductImportTaskStatus;

readonly class ImportItem extends AbstractModel
{
    /**
     * @param string $offer_id
     * @param int $product_id
     * @param ProductImportTaskStatus $status
     * @param ImportError[] $errors
     */
    public function __construct(
        public string $offer_id,
        public int $product_id,
        public ProductImportTaskStatus $status,
        public array $errors = [],
    ) {}
}