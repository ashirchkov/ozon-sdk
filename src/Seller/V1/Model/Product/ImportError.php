<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;

readonly class ImportError extends AbstractModel
{
    /**
     * @param string $code
     * @param string $message
     * @param string $state
     * @param string $level
     * @param string $description
     * @param string $field
     * @param int $attribute_id
     * @param string $attribute_name
     */
    public function __construct(
        public string $code,
        public string $message,
        public string $state,
        public string $level,
        public string $description,
        public string $field,
        public int $attribute_id,
        public string $attribute_name,
    ) {}
}