<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryCalculateResult
{

    /**
     * @Type("float")
     * @var float
     */
    public $amount;

}