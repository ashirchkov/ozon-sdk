<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory;

use AlexeyShirchkov\Ozon\Common\Enum\Language;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class TreeRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param Language $language
     */
    public function __construct(
        public Language $language = Language::Default
    ) {}
}