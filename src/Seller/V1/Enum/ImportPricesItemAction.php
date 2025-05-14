<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum ImportPricesItemAction: string
{
    case Enabled = 'ENABLED';
    case Disabled = 'DISABLED';
    case Unknown = 'UNKNOWN';
}