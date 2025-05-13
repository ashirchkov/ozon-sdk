<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V3\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V3\Service\ProductService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ListRequest;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ImportProduct;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ImportRequest;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\InfoListRequest;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;

class ProductServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testImportMethod() {

        $request = new ImportRequest([new ImportProduct(123)]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_import_v3')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->import($request);

        $this->assertEquals(123456, $response->result->task_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->import($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testListMethod() {

        $request = new ListRequest();

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_list_v3')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->list($request);

        $this->assertEquals(1, $response->result->total);
        $this->assertCount(1, $response->result->items);
        $this->assertEquals(123, $response->result->items[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->list($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testInfoListMethod() {

        $request = new InfoListRequest();

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_list_v3')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->infoList($request);

        $this->assertCount(1, $response->items);
        $this->assertEquals(123, $response->items[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoList($request);

    }

}