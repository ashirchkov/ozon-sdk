<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class UpdateOfferIdRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param UpdateOfferIdItem[] $update_offer_id
     */
    public function __construct(
        public array $update_offer_id,
    ) {}
}