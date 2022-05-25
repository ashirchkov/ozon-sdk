<?php

namespace AlexeyShirchkov\Ozon\Tests\Rocket;

use AlexeyShirchkov\Ozon\Rocket\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;

class ApiClient
{

    private $apiClient;

    public function __construct(MockHandler $handler) {

        $handlerStack = HandlerStack::create($handler);

        $this->apiClient = new Client(
            new \GuzzleHttp\Client([
                'handler' => $handlerStack
            ])
        );

    }

    public function auth() {
        return $this->apiClient->auth();
    }

    public function delivery() {
        return $this->apiClient->delivery();
    }

}