<?php

namespace AlexeyShirchkov\Ozon\Logistics;

use AlexeyShirchkov\Ozon\Logistics\Api\Auth;
use AlexeyShirchkov\Ozon\Logistics\Api\Delivery;
use Psr\Http\Client\ClientInterface;

class Client
{

    private $host = 'https://api.ozon.ru';
    private $testHost = 'https://api-stg.ozonru.me';

    private $testMode = false;

    private $httpClient;

    public function __construct(ClientInterface $httpClient) {
        $this->httpClient = $httpClient;
    }

    public function setTestMode(bool $isTestMode) {
        $this->testMode = $isTestMode;
    }

    public function isTestMode(): bool {
        return $this->testMode;
    }

    public function getHost() {
        return $this->isTestMode() ? $this->testHost : $this->host;
    }

    public function getHttpClient() {
        return $this->httpClient;
    }

    public function auth() {
        return new Auth($this);
    }

    public function delivery() {
        return new Delivery($this);
    }

}