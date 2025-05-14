<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class AddItem extends AbstractModel
{
    /**
     * @param int $sku
     * @param string $barcode
     */
    public function __construct(
        public int $sku,
        public string $barcode,
    ) {}
}