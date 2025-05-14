<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class AddError extends AbstractModel
{
    /**
     * @param int|null $sku
     * @param string|null $barcode
     * @param string|null $code
     * @param string|null $error
     */
    public function __construct(
        public ?int $sku = null,
        public ?string $barcode = null,
        public ?string $code = null,
        public ?string $error = null,
    ) {}
}