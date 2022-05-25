<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryFromPlace
{

    /**
     * @Type("int")
     * @var int
     */
    public $id;

    /**
     * @Type("string")
     * @var string
     */
    public $name;

    /**
     * @Type("string")
     * @var string
     */
    public $city;

    /**
     * @Type("string")
     * @var string
     */
    public $address;

    /**
     * @Type("string")
     * @var string
     */
    public $utcOffset;

}