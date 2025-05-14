<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class DiscountsTaskApproveRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param DiscountsTaskApproveTask[] $tasks
     */
    public function __construct(
        public array $tasks
    ) {}
}