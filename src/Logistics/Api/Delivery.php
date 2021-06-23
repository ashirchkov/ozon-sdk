<?php

namespace AlexeyShirchkov\Ozon\Logistics\Api;

use AlexeyShirchkov\Ozon\Logistics\Http\Request;

class Delivery extends Request
{

    const API_URL = '/principal-integration-api/v1/delivery';

    public function cities() {

        return $this->setPath(self::API_URL.'/cities')->send();

    }

    public function variants(array $params = []) {

        return $this->setPath(self::API_URL.'/variants')
            ->setQuery($params)
            ->send();

    }

    public function byAddress(array $params = []) {

        return $this->setPath(self::API_URL.'/variants/byaddress')
            ->setQuery($params)
            ->send();

    }

    public function byAddressShort(array $params = []) {

        return $this->setPath(self::API_URL.'/variants/byaddress/short')
            ->setQuery($params)
            ->send();

    }

    public function byViewport(array $params = []) {

        return $this->setPath(self::API_URL.'/variants/byviewport')->send();

    }

    public function calculate(array $params = []) {

        return $this->setPath(self::API_URL.'/calculate')
            ->setQuery($params)
            ->send();

    }

    public function time(array $params = []) {

        return $this->setPath(self::API_URL.'/time')
            ->setQuery($params)
            ->send();

    }

    public function fromPlaces() {

        return $this->setPath(self::API_URL.'/from_places')->send();

    }

}