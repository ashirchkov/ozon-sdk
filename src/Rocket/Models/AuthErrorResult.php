<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class AuthErrorResult
{

    /**
     * @Type("string")
     * @var string
     */
    public $error;

}