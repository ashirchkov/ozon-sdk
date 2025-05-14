<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V5\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V5\Service\ProductService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V5\Model\Product\InfoPricesFilter;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V5\Model\Product\InfoPricesRequest;

class ProductServiceTest extends ServiceTestCase
{

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoPricesMethod() {

        $request = new InfoPricesRequest(new InfoPricesFilter([123], ['123']), 10);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_prices_v5')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->infoPrices($request);

        $this->assertCount(1, $response->items);
        $this->assertEquals(123, $response->items[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoPrices($request);

    }

}