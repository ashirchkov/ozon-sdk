<?php

namespace AlexeyShirchkov\Ozon\Seller\V3\Enum;

enum PriceColorIndex: string
{
    case ColorIndexUnspecified = 'COLOR_INDEX_UNSPECIFIED';
    case ColorIndexWithoutIndex = 'COLOR_INDEX_WITHOUT_INDEX';
    case ColorIndexGreen = 'COLOR_INDEX_GREEN';
    case ColorIndexYellow = 'COLOR_INDEX_YELLOW';
    case ColorIndexRed = 'COLOR_INDEX_RED';
}
