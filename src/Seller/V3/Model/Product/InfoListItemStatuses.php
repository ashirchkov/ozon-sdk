<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use DateTimeImmutable;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class InfoListItemStatuses extends AbstractModel
{
    /**
     * @param DateTimeImmutable|null $status_updated_at
     * @param string|null $moderate_status
     * @param string|null $status
     * @param string|null $status_description
     * @param string|null $status_failed
     * @param string|null $status_name
     * @param string|null $status_tooltip
     * @param string|null $validation_status
     * @param bool|null $is_created
     */
    public function __construct(
        public ?DateTimeImmutable $status_updated_at = null,
        public ?string $moderate_status = null,
        public ?string $status = null,
        public ?string $status_description = null,
        public ?string $status_failed = null,
        public ?string $status_name = null,
        public ?string $status_tooltip = null,
        public ?string $validation_status = null,
        public ?bool $is_created = null,
    ) {}
}