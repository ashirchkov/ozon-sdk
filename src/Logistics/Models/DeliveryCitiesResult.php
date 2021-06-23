<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryCitiesResult
{

    /**
     * @Type("array")
     * @var array
     */
    public $data;

}