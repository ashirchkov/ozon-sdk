# Ozon-sdk

Ozon SDK

## Документация Ozon Api

Ozon Seller - <https://docs.ozon.ru/api/seller>

## Установка

Via Composer

``` shell 
$ composer require ashirchkov/ozon-sdk
```

## Быстрый старт

``` php
<?php

use AlexeyShirchkov\Ozon\Seller\Client;
use AlexeyShirchkov\Ozon\Seller\ClientConfiguration;
use AlexeyShirchkov\Ozon\Common\Enum\VisibilityFilter;
use AlexeyShirchkov\Ozon\Common\Factory\SerializerFactory;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ListFilter;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ListRequest;

// PSR-18 HTTP client
$httpClient = new \GuzzleHttp\Client();
$configuration = new ClientConfiguration('https://api-seller.ozon.ru', 'client_id', 'api_key');
$serializer = SerializerFactory::createSymfonySerializer();

$ozonClient = new Client($httpClient, $configuration, $serializer);

try {

    $request = new ListRequest(
        filter: new ListFilter(
            visibility: VisibilityFilter::Visible
        ),
        limit: '100',
        last_id: 66245734
    );
    $response = $ozonClient->v3()->product()->list($request);

    echo $response->result->total;

} catch (OzonApiException $exception) {

    echo $exception->getMessage();

}
```

## Подробная документация

- [Seller API](docs/seller.md)
- Retail API (Coming soon...)
- Agent API (Coming soon...)
- Performance API (Coming soon...)
- Logistic platform API (Coming soon...)
- TK API (Coming soon...)
- Statistics API (Coming soon...)
- Applications API (Coming soon...)
- Export API Logistic Platform (Coming soon...)
- FBP API (Coming soon...)
- ORD API (Coming soon...)