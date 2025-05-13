<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ProductService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkyItem;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\RatingBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\PicturesImportRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\AttributesUpdateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoDescriptionByOfferIdRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoDescriptionByProductIdRequest;

class ProductServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testImportInfoMethodMethod(): void {

        $request = new ImportInfoRequest('task_id');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_import_info_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->importInfo($request);

        $this->assertEquals(1, $response->result->total);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->importInfo($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testImportBySkuMethod(): void {

        $request = new ImportBySkuRequest([new ImportBySkyItem(123)]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_import_by_sku_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->importBySku($request);

        $this->assertEquals(123456, $response->result->task_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->importBySku($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testAttributesUpdateMethod(): void {

        $request = new AttributesUpdateRequest('123');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_attributes_update_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->attributesUpdate($request);

        $this->assertEquals(123456, $response->task_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->attributesUpdate($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testPicturesImportMethod(): void {

        $request = new PicturesImportRequest(123);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_pictures_import_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->picturesImport($request);

        $this->assertCount(1, $response->result->pictures);
        $this->assertEquals(123, $response->result->pictures[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->picturesImport($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testRatingBySkuMethod(): void {

        $request = new RatingBySkuRequest(['123']);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_rating_by_sku_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);
        $response = $service->ratingBySku($request);

        $this->assertCount(1, $response->products);
        $this->assertEquals(123, $response->products[0]->sku);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->ratingBySku($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testInfoDescriptionMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_description_v1')
            ),
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_description_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->infoDescription(
            new InfoDescriptionByOfferIdRequest('123')
        );

        $this->assertEquals(123, $response->result->id);

        $response = $service->infoDescription(
            new InfoDescriptionByProductIdRequest(123)
        );

        $this->assertEquals(123, $response->result->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoDescription(
            new InfoDescriptionByOfferIdRequest('123')
        );

    }

}