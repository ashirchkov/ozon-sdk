<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Model;

readonly class ApiErrorDetail extends AbstractModel
{
    /**
     * @param string|null $typeUrl Тип протокола передачи данных
     * @param string|null $value Значение ошибки
     */
    public function __construct(
        public ?string $typeUrl = null,
        public ?string $value = null
    ) {}

}