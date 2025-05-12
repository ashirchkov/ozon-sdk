<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Model;

readonly class ApiErrorDetail extends AbstractModel
{
    /**
     * @param string $typeUrl Тип протокола передачи данных
     * @param string $value Значение ошибки
     */
    public function __construct(
        public string $typeUrl,
        public string $value
    ) {}

}