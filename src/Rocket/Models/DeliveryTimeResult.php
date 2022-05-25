<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryTimeResult
{

    /**
     * @Type("float")
     * @var float
     */
    public $days;

}