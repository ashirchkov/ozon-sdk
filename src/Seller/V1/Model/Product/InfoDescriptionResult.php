<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class InfoDescriptionResult extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param int|null $id
     * @param string|null $offer_id
     * @param string|null $name
     * @param string|null $description
     */
    public function __construct(
        public ?int $id = null,
        public ?string $offer_id = null,
        public ?string $name = null,
        public ?string $description = null,
    ) {}
}