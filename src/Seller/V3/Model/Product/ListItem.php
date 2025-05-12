<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ListItem extends AbstractModel
{
    /**
     * @param int $product_id
     * @param string $offer_id
     * @param ListItemQuant $quants
     * @param bool $is_discounted
     * @param bool $has_fbs_stocks
     * @param bool $has_fbo_stocks
     * @param bool $archived
     */
    public function __construct(
        public int $product_id,
        public string $offer_id,
        public ListItemQuant $quants,
        public bool $is_discounted,
        public bool $has_fbs_stocks,
        public bool $has_fbo_stocks,
        public bool $archived,
    ) {}
}