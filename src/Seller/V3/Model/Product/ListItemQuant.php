<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ListItemQuant extends AbstractModel
{
    /**
     * @param string|null $quant_code
     * @param int|null $quant_size
     */
    public function __construct(
        public ?string $quant_code = null,
        public ?int $quant_size = null,
    ) {}
}