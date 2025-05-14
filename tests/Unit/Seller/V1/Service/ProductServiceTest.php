<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\TaskStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ProductService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ArchiveRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkyItem;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportPricesItem;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UpdateOfferIdItem;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\RatingBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportPricesRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UpdateOfferIdRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\GetRelatedSkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\PicturesImportRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoDiscountedRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UpdateDiscountRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\AttributesUpdateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoSubscriptionRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UploadDigitalCodesRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UploadDigitalCodesInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoDescriptionByOfferIdRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoStocksByWarehouseFbsRequest;
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

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testUpdateOfferIdMethod(): void {

        $request = new UpdateOfferIdRequest([
            new UpdateOfferIdItem('321', '123')
        ]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_update_offer_id_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->updateOfferId($request);

        $this->assertCount(1, $response->errors);
        $this->assertEquals('123', $response->errors[0]->offer_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->updateOfferId($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testArchiveMethod(): void {

        $request = new ArchiveRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                json_encode(['result' => true])
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->archive($request);
        $this->assertTrue($response->result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->archive($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testUnarchiveMethod(): void {

        $request = new ArchiveRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                json_encode(['result' => true])
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->unarchive($request);
        $this->assertTrue($response->result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->unarchive($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testUploadDigitalCodesMethod(): void {

        $request = new UploadDigitalCodesRequest(123, ['123', '456']);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                json_encode(['result' => ['task_id' => 123456]])
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->uploadDigitalCodes($request);
        $this->assertEquals(123456, $response->result->task_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->uploadDigitalCodes($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testUploadDigitalCodesInfoMethod(): void {

        $request = new UploadDigitalCodesInfoRequest(123456);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                json_encode(['result' => ['status' => 'imported']])
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->uploadDigitalCodesInfo($request);
        $this->assertEquals(TaskStatus::Imported, $response->result->status);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->uploadDigitalCodesInfo($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoSubscriptionMethod(): void {

        $request = new InfoSubscriptionRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_subscription_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->infoSubscription($request);
        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->sku);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoSubscription($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testGetRelatedSkuMethod(): void {

        $request = new GetRelatedSkuRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_get_related_sku_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->getRelatedSku($request);
        $this->assertCount(1, $response->items);
        $this->assertEquals(123, $response->items[0]->sku);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->getRelatedSku($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoStocksByWarehouseFbsMethod(): void {

        $request = new InfoStocksByWarehouseFbsRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_stocks_by_warehouse_fbs_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->infoStocksByWarehouseFbs($request);
        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->sku);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoStocksByWarehouseFbs($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testImportPricesMethod(): void {

        $request = new ImportPricesRequest([new ImportPricesItem('123')]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_import_prices_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->importPrices($request);
        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->importPrices($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testInfoDiscountedMethod(): void {

        $request = new InfoDiscountedRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('product_info_discounted_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->infoDiscounted($request);
        $this->assertCount(1, $response->items);
        $this->assertEquals(123, $response->items[0]->sku);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->infoDiscounted($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testUpdateDiscountMethod(): void {

        $request = new UpdateDiscountRequest(123, 100);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                json_encode(['result' => true])
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ProductService($mockClient, $this->configuration, $this->serializer);

        $response = $service->updateDiscount($request);
        $this->assertTrue($response->result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->updateDiscount($request);

    }

}