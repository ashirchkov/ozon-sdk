<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DiscountsTaskResult extends AbstractModel
{
    /**
     * @param int|null $success_count
     * @param int|null $fail_count
     * @param DiscountsTaskResultFailDetail[]|null $fail_details
     */
    public function __construct(
        public ?int $success_count = null,
        public ?int $fail_count = null,
        public ?array $fail_details = null,
    ) {}
}