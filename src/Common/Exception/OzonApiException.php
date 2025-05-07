<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Exception;

use AlexeyShirchkov\Ozon\Common\Model\ApiErrorDetail;
use Exception;

class OzonApiException extends Exception
{
    protected array $details;

    /**
     * OzonApiException constructor.
     * @param string $message
     * @param int $code
     * @param ApiErrorDetail[] $details
     */
    public function __construct(string $message, int $code = 0, array $details = []) {
        parent::__construct($message, $code);
        $this->details = $details;
    }

    /**
     * @return ApiErrorDetail[]
     */
    public function getDetails(): array {
        return $this->details;
    }

}