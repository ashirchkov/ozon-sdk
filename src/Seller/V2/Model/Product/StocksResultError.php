<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class StocksResultError extends AbstractModel
{
    /**
     * @param string|null $code
     * @param string|null $message
     */
    public function __construct(
        public ?string $code = null,
        public ?string $message = null,
    ) {}
}