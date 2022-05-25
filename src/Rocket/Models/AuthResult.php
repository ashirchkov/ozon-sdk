<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class AuthResult
{

    /**
     * @Type("string")
     * @var string
     */
    public $access_token;

    /**
     * @Type("int")
     * @var int
     */
    public $expires_in;

    /**
     * @Type("string")
     * @var string
     */
    public $token_type;

    /**
     * @Type("string")
     * @var string
     */
    public $scope;

}