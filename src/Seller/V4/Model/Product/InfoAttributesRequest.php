<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\SortDirection;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class InfoAttributesRequest extends AbstractModel implements ApiRequestInterface
{
    public function __construct(
        public ?InfoAttributesFilter $filter = null,
        public ?int $limit = null,
        public ?string $last_id = null,
        public ?string $sort_by = null,
        public ?SortDirection $sort_dir = null,
    ) {}
}