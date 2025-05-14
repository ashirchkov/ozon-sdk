<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class CandidatesResult extends AbstractModel
{
    /**
     * @param ActionProduct[]|null $products
     * @param int|null $total
     * @param string|null $last_id
     */
    public function __construct(
        public ?array $products = null,
        public ?int $total = null,
        public ?string $last_id = null,
    ) {}
}