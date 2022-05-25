<?php

namespace AlexeyShirchkov\Ozon\Rocket\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryVariantsResult
{

    /**
     * @Type("array<AlexeyShirchkov\Ozon\Rocket\Models\DeliveryVariant>")
     * @var DeliveryVariant[]
     */
    public $data;

    /**
     * @Type("int")
     * @var int
     */
    public $totalCount;

    /**
     * @Type("string")
     * @var string
     */
    public $nextPageToken;

}