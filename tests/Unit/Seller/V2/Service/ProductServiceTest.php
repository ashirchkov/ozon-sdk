<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V2\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V2\Service\ProductService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\DeleteRequest;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\DeleteProduct;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\PicturesInfoRequest;

class ProductServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testDeleteMethod(): void {

        $request = new DeleteRequest([new DeleteProduct('123')]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_delete_v2')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->delete($request);
        $this->assertCount(1, $response->status);
        $this->assertEquals('123', $response->status[0]->offer_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->delete($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testPicturesInfoMethod(): void {

        $request = new PicturesInfoRequest(['123']);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_pictures_info_v2')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->picturesInfo($request);
        $this->assertCount(1, $response->items);
        $this->assertEquals(123, $response->items[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->picturesInfo($request);

    }

}