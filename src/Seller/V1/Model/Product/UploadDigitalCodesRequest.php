<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class UploadDigitalCodesRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $product_id
     * @param string[] $digital_codes
     */
    public function __construct(
        public int $product_id,
        public array $digital_codes,
    ) {}
}