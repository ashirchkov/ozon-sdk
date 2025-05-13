<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ListItem extends AbstractModel
{
    /**
     * @param int|null $product_id
     * @param string|null $offer_id
     * @param ListItemQuant[]|null $quants
     * @param bool|null $is_discounted
     * @param bool|null $has_fbs_stocks
     * @param bool|null $has_fbo_stocks
     * @param bool|null $archived
     */
    public function __construct(
        public ?int $product_id = null,
        public ?string $offer_id = null,
        public ?array $quants = null,
        public ?bool $is_discounted = null,
        public ?bool $has_fbs_stocks = null,
        public ?bool $has_fbo_stocks = null,
        public ?bool $archived = null,
    ) {}
}