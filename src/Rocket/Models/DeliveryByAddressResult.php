<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryByAddressResult
{

    /**
     * @Type("array<AlexeyShirchkov\Ozon\Rocket\Models\DeliveryVariant>")
     * @var DeliveryVariant[]
     */
    public $data;

}