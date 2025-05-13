<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class UpdateOfferIdItem extends AbstractModel
{
    /**
     * @param string $new_offer_id
     * @param string $offer_id
     */
    public function __construct(
        public string $new_offer_id,
        public string $offer_id,
    ) {}
}