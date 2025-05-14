<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Enum;

enum ProductInfoStocksShipmentType: string
{
    case ShipmentTypeGeneral = 'SHIPMENT_TYPE_GENERAL';
    case ShipmentTypeBox = 'SHIPMENT_TYPE_BOX';
    case ShipmentTypePallet = 'SHIPMENT_TYPE_PALLET';
}