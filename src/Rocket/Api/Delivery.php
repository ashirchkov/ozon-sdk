<?php

namespace AlexeyShirchkov\Ozon\Rocket\Api;

use AlexeyShirchkov\Ozon\Rocket\Http\ApiRequest;

class Delivery extends ApiRequest
{

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