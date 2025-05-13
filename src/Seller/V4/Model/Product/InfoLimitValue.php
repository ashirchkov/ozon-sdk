<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoLimitValue extends AbstractModel
{
    /**
     * @param int|null $limit
     * @param int|null $usage
     * @param DateTimeImmutable|null $reset_at
     */
    public function __construct(
        public ?int $limit = null,
        public ?int $usage = null,
        public ?DateTimeImmutable $reset_at = null,
    ) {}
}