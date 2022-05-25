<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryByAddressShortResult
{

    /**
     * @Type("array")
     * @var array
     */
    public $deliveryVariantIds;

}