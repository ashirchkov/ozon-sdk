<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoPricesItemMarketingAction extends AbstractModel
{
    /**
     * @param DateTimeImmutable|null $date_from
     * @param DateTimeImmutable|null $date_to
     * @param string|null $title
     * @param string|null $value
     */
    public function __construct(
        public ?DateTimeImmutable $date_from = null,
        public ?DateTimeImmutable $date_to = null,
        public ?string $title = null,
        public ?string $value = null
    ) {}
}