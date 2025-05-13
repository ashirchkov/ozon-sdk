<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum RelatedSkuItemDeliverySchema: string
{
    case Sds = 'SDS';
    case Fbo = 'FBO';
    case Fbs = 'FBS';
    case Crossborder = 'Crossborder';
}