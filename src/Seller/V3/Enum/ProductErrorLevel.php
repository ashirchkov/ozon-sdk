<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Enum;

enum ProductErrorLevel: string
{
    case ErrorLevelUnspecified = 'ERROR_LEVEL_UNSPECIFIED';
    case ErrorLevelError = 'ERROR_LEVEL_ERROR';
    case ErrorLevelInternal = 'ERROR_LEVEL_INTERNAL';
    case ErrorLevelWarning = 'ERROR_LEVEL_WARNING';
}