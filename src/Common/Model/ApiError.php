<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Model;

use AlexeyShirchkov\Ozon\Common\Contract\ApiResponseInterface;

readonly class ApiError extends AbstractModel implements ApiResponseInterface
{

    /**
     * @param int $code Код ошибки
     * @param string $message Описание ошибки
     * @param ApiErrorDetail[] $details Дополнительная информация об ошибке
     */
    public function __construct(
        public int $code,
        public string $message,
        public array $details = [],
    ) {}

}