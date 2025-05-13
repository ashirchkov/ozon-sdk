<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class UpdateOfferIdError extends AbstractModel
{
    /**
     * @param string|null $offer_id
     * @param string|null $message
     */
    public function __construct(
        public ?string $offer_id = null,
        public ?string $message = null,
    ) {}
}