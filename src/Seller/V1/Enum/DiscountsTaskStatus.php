<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum DiscountsTaskStatus: string
{
    case New = 'NEW';
    case Seen = 'SEEN';
    case Approved = 'APPROVED';
    case PartlyApproved = 'PARTLY_APPROVED';
    case Declined = 'DECLINED';
    case AutoDeclined = 'AUTO_DECLINED';
    case DeclinedByUser = 'DECLINED_BY_USER';
    case Coupon = 'COUPON';
    case Purchased = 'PURCHASED';
    case Unknown = 'UNKNOWN';
}