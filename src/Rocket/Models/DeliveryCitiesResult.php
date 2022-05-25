<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryCitiesResult
{

    /**
     * @Type("array")
     * @var array
     */
    public $data;

}