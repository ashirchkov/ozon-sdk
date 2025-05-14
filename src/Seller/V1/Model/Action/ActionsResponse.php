<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ActionsResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param ActionsItem[] $result
     */
    public function __construct(
        public array $result
    ) {}
}