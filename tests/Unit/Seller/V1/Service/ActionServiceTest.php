<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ActionService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\DiscountsTaskStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\CandidatesRequest;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsActivateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsActivateProduct;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskListRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskApproveTask;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskDeclineTask;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsDeactivateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskApproveRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskDeclineRequest;

class ActionServiceTest extends ServiceTestCase
{

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testActionMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->actions();

        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->actions();

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testCandidatesMethod(): void {

        $request = new CandidatesRequest(123);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_candidates_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->candidates($request);

        $this->assertCount(2, $response->result->products);
        $this->assertEquals(123, $response->result->products[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->candidates($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testProductsMethod(): void {

        $request = new ProductsRequest(123);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_products_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->products($request);

        $this->assertCount(1, $response->result->products);
        $this->assertEquals(123, $response->result->products[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->products($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testProductsActivateMethod(): void {

        $request = new ProductsActivateRequest(1, [new ProductsActivateProduct(123, 100)]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_products_activate_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->productsActivate($request);

        $this->assertCount(1, $response->result->product_ids);
        $this->assertContains(123, $response->result->product_ids);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->productsActivate($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testProductsDeactivateMethod(): void {

        $request = new ProductsDeactivateRequest(1, [123]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_products_deactivate_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->productsDeactivate($request);

        $this->assertCount(1, $response->result->product_ids);
        $this->assertContains(123, $response->result->product_ids);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->productsDeactivate($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testDiscountsTaskList() {

        $request = new DiscountsTaskListRequest(DiscountsTaskStatus::Approved, 10);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_discounts_task_list_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->discountsTaskList($request);

        $this->assertCount(1, $response->result);
        $this->assertEquals(123, $response->result[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->discountsTaskList($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testDiscountsTaskApprove() {

        $request = new DiscountsTaskApproveRequest([
            new DiscountsTaskApproveTask(123, 1, 2, 3)
        ]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_discounts_task_approve_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->discountsTaskApprove($request);

        $this->assertEquals(1, $response->result->success_count);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->discountsTaskApprove($request);

    }

    /**
     * @return void
     * @throws OzonApiException
     */
    public function testDiscountsTaskDecline() {

        $request = new DiscountsTaskDeclineRequest([
            new DiscountsTaskDeclineTask(123)
        ]);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('actions_discounts_task_decline_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ActionService($mockClient, $this->configuration, $this->serializer);
        $response = $service->discountsTaskDecline($request);

        $this->assertEquals(4, $response->result->success_count);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->discountsTaskDecline($request);

    }

}