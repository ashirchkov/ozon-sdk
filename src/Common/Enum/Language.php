<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Enum;

enum Language: string
{
    case En = 'EN';
    case Ru = 'RU';
    case Tr = 'TR';
    case ZhHans = 'ZH_HANS';
    case Default = 'DEFAULT';
}