<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ListRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param ListFilter|null $filter
     * @param string|null $limit
     * @param int|null $last_id
     */
    public function __construct(
        public ?ListFilter $filter = null,
        public ?string $limit = null,
        public ?int $last_id = null,
    ) {}
}