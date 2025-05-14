<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ProductsRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $action_id
     * @param int|null $limit
     * @param string|null $last_id
     */
    public function __construct(
        public int $action_id,
        public ?int $limit = null,
        public ?string $last_id = null,
    ) {}
}