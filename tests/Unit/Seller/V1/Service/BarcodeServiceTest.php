<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\AddItem;
use AlexeyShirchkov\Ozon\Seller\V1\Service\BarcodeService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\AddRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\GenerateRequest;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;

class BarcodeServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testAddMethod() {

        $request = new AddRequest([new AddItem(123, '123456')]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('barcode_add_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new BarcodeService($mockClient, $this->configuration, $this->serializer);
        $response = $service->add($request);

        $this->assertCount(1, $response->errors);
        $this->assertEquals(123, $response->errors[0]->sku);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->add($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testGenerateMethod() {

        $request = new GenerateRequest([123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('barcode_generate_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new BarcodeService($mockClient, $this->configuration, $this->serializer);
        $response = $service->generate($request);

        $this->assertCount(1, $response->errors);
        $this->assertEquals(123, $response->errors[0]->product_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->generate($request);

    }

}