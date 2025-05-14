<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V1\Service\DescriptionCategoryService;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\TreeRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeValuesRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeValuesSearchRequest;

class DescriptionCategoryServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testTreeMethod(): void {

        $request = new TreeRequest();

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('description_category_tree_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new DescriptionCategoryService($mockClient, $this->configuration, $this->serializer);
        $response = $service->tree($request);

        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->description_category_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->tree($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testAttributeMethod(): void {

        $request = new AttributeRequest(123, 1);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('description_category_attribute_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new DescriptionCategoryService($mockClient, $this->configuration, $this->serializer);
        $response = $service->attribute($request);

        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->attribute($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testAttributeValuesMethod(): void {

        $request = new AttributeValuesRequest(123, 1, 2, 5);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('description_category_attribute_values_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new DescriptionCategoryService($mockClient, $this->configuration, $this->serializer);
        $response = $service->attributeValues($request);

        $this->assertCount(2, $response->result);
        $this->assertEquals(123, $response->result[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->attributeValues($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testAttributeValuesSearchMethod(): void {

        $request = new AttributeValuesSearchRequest(123, 1, 2, 5, 'test');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('description_category_attribute_values_search_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new DescriptionCategoryService($mockClient, $this->configuration, $this->serializer);
        $response = $service->attributeValuesSearch($request);

        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->attributeValuesSearch($request);

    }

}