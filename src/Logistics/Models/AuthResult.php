<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class AuthResult
{

    /**
     * Токен доступа
     * @Type("string")
     * @var string
     */
    public $access_token;

    /**
     * Время жизни токена
     * @Type("int")
     * @var int
     */
    public $expires_in;

    /**
     * Тип токена
     * @Type("string")
     * @var string
     */
    public $token_type;

    /**
     * Права
     * @Type("string")
     * @var string
     */
    public $scope;

}