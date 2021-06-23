<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryFromPlacesResult
{

    /**
     * @Type("array<AlexeyShirchkov\Ozon\Logistics\Models\DeliveryFromPlace>")
     * @var DeliveryFromPlace[]
     */
    public $places;

}