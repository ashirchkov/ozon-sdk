<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class GenerateError extends AbstractModel
{
    /**
     * @param int|null $product_id
     * @param string|null $barcode
     * @param string|null $code
     * @param string|null $error
     */
    public function __construct(
        public ?int $product_id = null,
        public ?string $barcode = null,
        public ?string $code = null,
        public ?string $error = null,
    ) {}
}