<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class TreeResponse extends AbstractModel implements ApiResponseInterface
{
    /**
     * @param TreeNode[] $result
     */
    public function __construct(
        public array $result
    ) {}
}