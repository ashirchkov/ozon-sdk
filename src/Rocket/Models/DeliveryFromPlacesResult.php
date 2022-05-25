<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryFromPlacesResult
{

    /**
     * @Type("array<AlexeyShirchkov\Ozon\Rocket\Models\DeliveryFromPlace>")
     * @var DeliveryFromPlace[]
     */
    public $places;

}