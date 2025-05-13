<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V2\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DeleteStatus extends AbstractModel
{
    /**
     * @param string|null $offer_id
     * @param string|null $error
     * @param bool|null $is_deleted
     */
    public function __construct(
        public ?string $offer_id = null,
        public ?string $error = null,
        public ?bool $is_deleted = null,
    ) {}
}