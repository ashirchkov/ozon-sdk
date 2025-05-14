<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\DiscountsTaskStatus;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class DiscountsTaskListRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param DiscountsTaskStatus $status
     * @param int $limit
     * @param int|null $page
     */
    public function __construct(
        public DiscountsTaskStatus $status,
        public int $limit,
        public ?int $page = null,
    ) {}
}