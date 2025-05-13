<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Enum;

enum ShipmentType: string
{
    case ShipmentTypeUnspecified = 'SHIPMENT_TYPE_UNSPECIFIED';
    case ShipmentTypeGeneral = 'SHIPMENT_TYPE_GENERAL';
    case ShipmentTypeBox = 'SHIPMENT_TYPE_BOX';
    case ShipmentTypePallet = 'SHIPMENT_TYPE_PALLET';
}