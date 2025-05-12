<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ListItemQuant extends AbstractModel
{
    /**
     * @param string $quant_code
     * @param int $quant_size
     */
    public function __construct(
        public string $quant_code,
        public int $quant_size,
    ) {}
}