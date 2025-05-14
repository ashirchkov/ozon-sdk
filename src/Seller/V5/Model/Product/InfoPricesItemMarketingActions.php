<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPricesItemMarketingActions extends AbstractModel
{
    /**
     * @param InfoPricesItemMarketingAction[]|null $actions
     * @param DateTimeImmutable|null $current_period_from
     * @param DateTimeImmutable|null $current_period_to
     * @param bool|null $ozon_actions_exist
     */
    public function __construct(
        public ?array $actions = null,
        public ?DateTimeImmutable $current_period_from = null,
        public ?DateTimeImmutable $current_period_to = null,
        public ?bool $ozon_actions_exist = null
    ) {}
}