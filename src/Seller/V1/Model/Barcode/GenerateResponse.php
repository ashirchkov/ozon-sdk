<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class GenerateResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param GenerateError[] $errors
     */
    public function __construct(
        public array $errors
    ) {}
}