<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryCalculateResult
{

    /**
     * @Type("float")
     * @var float
     */
    public $amount;

}