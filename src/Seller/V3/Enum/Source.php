<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Enum;

enum Source: string
{
    case Sds = 'SDS';
    case Fbo = 'FBO';
    case Fbs = 'FBS';
}