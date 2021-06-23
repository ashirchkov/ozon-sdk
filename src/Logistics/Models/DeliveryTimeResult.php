<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryTimeResult
{

    /**
     * @Type("float")
     * @var float
     */
    public $days;

}