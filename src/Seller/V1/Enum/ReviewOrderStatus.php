<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum ReviewOrderStatus: string
{
    case Delivered = 'DELIVERED';
    case Cancelled = 'CANCELLED';
}
