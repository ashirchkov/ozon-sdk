<?php

namespace AlexeyShirchkov\Ozon\Logistics\Models;

use JMS\Serializer\Annotation\Type;

class DeliveryVariant
{

    /**
     * @Type("int")
     * @var int
     */
    public $id;

    /**
     * @Type("int")
     * @var int
     */
    public $objectTypeId;

    /**
     * @Type("string")
     * @var string
     */
    public $objectTypeName;

    /**
     * @Type("string")
     * @var string
     */
    public $name;

    /**
     * @Type("string")
     * @var string
     */
    public $address;

    /**
     * @Type("string")
     * @var string
     */
    public $region;

    /**
     * @Type("string")
     * @var string
     */
    public $settlement;

    /**
     * @Type("string")
     * @var string
     */
    public $placement;

    /**
     * @Type("bool")
     * @var bool
     */
    public $enabled;

    /**
     * @Type("int")
     * @var int
     */
    public $cityId;

    /**
     * @Type("string")
     * @var string
     */
    public $fiasGuid;

    /**
     * @Type("string")
     * @var string
     */
    public $fiasGuidControl;

    /**
     * @Type("int")
     * @var int
     */
    public $addressElementId;

    /**
     * @Type("bool")
     * @var bool
     */
    public $fittingShoesAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $fittingClothesAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $cardPaymentAvailable;

    /**
     * @Type("string")
     * @var string
     */
    public $contractorName;

    /**
     * @Type("int")
     * @var int
     */
    public $contractorId;

    /**
     * @Type("string")
     * @var string
     */
    public $stateName;

    /**
     * @Type("int")
     * @var int
     */
    public $maxWeight;

    /**
     * @Type("string")
     * @var string
     */
    public $lat;

    /**
     * @Type("string")
     * @var string
     */
    public $long;

    /**
     * @Type("bool")
     * @var bool
     */
    public $returnAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $partialGiveOutAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $dangerousAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $isCashForbidden;

    /**
     * @Type("string")
     * @var string
     */
    public $code;

    /**
     * @Type("bool")
     * @var bool
     */
    public $wifiAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $legalEntityNotAvailable;

    /**
     * @Type("bool")
     * @var bool
     */
    public $isRestrictionAccess;

    /**
     * @Type("string")
     * @var string
     */
    public $utcOffsetStr;

    /**
     * @Type("bool")
     * @var bool
     */
    public $isPartialPrepaymentForbidden;

    /**
     * @Type("bool")
     * @var bool
     */
    public $isGeozoneAvailable;

    /**
     * @Type("int")
     * @var int
     */
    public $postalCode;

    /**
     * @Type("array")
     * @var array
     */
    public $workingHours;

}