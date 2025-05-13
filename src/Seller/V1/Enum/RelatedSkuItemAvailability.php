<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum RelatedSkuItemAvailability: string
{
    case Hidden = 'HIDDEN';
    case Available = 'AVAILABLE';
    case Unavailable = 'UNAVAILABLE';
}