<?php

namespace AlexeyShirchkov\Ozon\Logistics\Api;

use AlexeyShirchkov\Ozon\Logistics\Http\ApiRequest;

class Delivery extends ApiRequest
{

    public function cities() {

        return $this->setPath(self::API_URL.'/delivery/cities')->send();

    }

    public function variants(array $params = []) {

        return $this->setPath(self::API_URL.'/delivery/variants')
            ->setQuery($params)
            ->send();

    }

    public function byAddress(array $params = []) {

        return $this->setPath(self::API_URL.'/delivery/variants/byaddress')
            ->setQuery($params)
            ->send();

    }

    public function byAddressShort(array $params = []) {

        return $this->setPath(self::API_URL.'/delivery/variants/byaddress/short')
            ->setQuery($params)
            ->send();

    }

    public function byViewport(array $params = []) {

        return $this->setPath(self::API_URL.'/delivery/variants/byviewport')->send();

    }

    public function calculate(array $params = []) {

        return $this->setPath(self::API_URL.'/delivery/calculate')
            ->setQuery($params)
            ->send();

    }

    public function time(array $params = []) {

        return $this->setPath(self::API_URL.'/delivery/time')
            ->setQuery($params)
            ->send();

    }

    public function fromPlaces() {

        return $this->setPath(self::API_URL.'/delivery/from_places')->send();

    }

}