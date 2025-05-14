<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Action;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class DiscountsTaskDeclineTask extends AbstractModel
{
    /**
     * @param int $id
     * @param string|null $seller_comment
     */
    public function __construct(
        public int $id,
        public ?string $seller_comment = null,
    ) {}
}