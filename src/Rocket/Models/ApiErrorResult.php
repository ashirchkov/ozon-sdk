<?php


namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class ApiErrorResult
{

    /**
     * @Type("string")
     * @var string
     */
    public $message;

    /**
     * @Type("string")
     * @var string
     */
    public $errorCode;

    /**
     * @Type("array")
     * @var array
     */
    public $arguments;

    /**
     * @Type("array")
     * @var array
     */
    public $extensions;

    /**
     * @Type("int")
     * @var int
     */
    public $httpStatusCode;

}