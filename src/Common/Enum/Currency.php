<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Enum;

enum Currency: string
{
    case Rub = 'RUB';
    case Byn = 'BYN';
    case Kzt = 'KZT';
    case Eur = 'EUR';
    case Usd = 'USD';
    case Cny = 'CNY';
}