<?php

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum ReviewStatusFilter: string
{
    case All = 'ALL';
    case Processed = 'PROCESSED';
    case Unprocessed = 'UNPROCESSED';
}
