<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

readonly class InfoDescriptionByOfferIdRequest extends InfoDescriptionRequest
{
    /**
     * @param string $offer_id
     */
    public function __construct(
        public string $offer_id,
    ) {}
}