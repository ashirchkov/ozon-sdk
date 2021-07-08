<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class AuthErrorResult
{

    /**
     * @Type("string")
     * @var string
     */
    public $error;

}