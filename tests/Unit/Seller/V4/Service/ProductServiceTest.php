<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V4\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V4\Service\ProductService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoStocksFilter;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoStocksRequest;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoAttributesRequest;

class ProductServiceTest extends ServiceTestCase
{

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoAttributesMethod(): void {

        $request = new InfoAttributesRequest();

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_attributes_v4')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->infoAttributes($request);

        $this->assertEquals(1, $response->total);
        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoAttributes($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoLimitMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_limit_v4')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->infoLimit();

        $this->assertEquals(100, $response->total->limit);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoLimit();

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoStocksMethod() {

        $request = new InfoStocksRequest(new InfoStocksFilter(), 100);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_stocks_v4')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->infoStocks($request);

        $this->assertCount(1, $response->items);
        $this->assertEquals(123, $response->items[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoStocks($request);

    }

}