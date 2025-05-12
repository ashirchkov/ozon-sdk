<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum ReviewStatus: string
{
    case Processed = 'PROCESSED';
    case Unprocessed = 'UNPROCESSED';
}
