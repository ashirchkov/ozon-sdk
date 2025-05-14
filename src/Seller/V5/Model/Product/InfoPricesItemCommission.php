<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPricesItemCommission extends AbstractModel
{
    /**
     * @param float|null $fbo_deliv_to_customer_amount
     * @param float|null $fbo_direct_flow_trans_max_amount
     * @param float|null $fbo_direct_flow_trans_min_amount
     * @param float|null $fbo_return_flow_amount
     * @param float|null $fbs_deliv_to_customer_amount
     * @param float|null $fbs_direct_flow_trans_max_amount
     * @param float|null $fbs_direct_flow_trans_min_amount
     * @param float|null $fbs_first_mile_max_amount
     * @param float|null $fbs_first_mile_min_amount
     * @param float|null $fbs_return_flow_amount
     * @param float|null $sales_percent_fbo
     * @param float|null $sales_percent_fbs
     */
    public function __construct(
        public ?float $fbo_deliv_to_customer_amount = null,
        public ?float $fbo_direct_flow_trans_max_amount = null,
        public ?float $fbo_direct_flow_trans_min_amount = null,
        public ?float $fbo_return_flow_amount = null,
        public ?float $fbs_deliv_to_customer_amount = null,
        public ?float $fbs_direct_flow_trans_max_amount = null,
        public ?float $fbs_direct_flow_trans_min_amount = null,
        public ?float $fbs_first_mile_max_amount = null,
        public ?float $fbs_first_mile_min_amount = null,
        public ?float $fbs_return_flow_amount = null,
        public ?float $sales_percent_fbo = null,
        public ?float $sales_percent_fbs = null
    ) {}
}