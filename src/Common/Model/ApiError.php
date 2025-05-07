<?php

namespace AlexeyShirchkov\Ozon\Common\Model;

readonly class ApiError implements ModelInterface
{

    /**
     * @param int $code
     * @param string $message
     * @param ApiErrorDetail[] $details
     */
    public function __construct(
        public int    $code,
        public string $message,
        public array  $details,
    ) {}

}