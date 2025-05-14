<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DiscountsTaskResultFailDetail extends AbstractModel
{
    /**
     * @param int|null $task_id
     * @param string|null $error_for_user
     */
    public function __construct(
        public ?int $task_id = null,
        public ?string $error_for_user = null,
    ) {}
}