<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Handler\MockHandler;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ReviewService;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\InfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ListRequest;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentListRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ChangeStatusRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentCreateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentDeleteRequest;

class ReviewServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testCommentCreateMethod(): void {

        $request = new CommentCreateRequest('review_id', 'comment');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);
        $result = $service->commentCreate($request);

        $this->assertEquals('12345', $result->comment_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->commentCreate($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testCommentDeleteMethod(): void {

        $request = new CommentDeleteRequest('comment_id');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(),
            MockResponseFactory::createErrorResponse($this->fixtureLoader->load('api_error')),
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);

        $result = $service->commentDelete($request);
        $this->assertTrue($result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->commentDelete($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testCommentListMethod(): void {

        $request = new CommentListRequest('review_id');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_list_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);
        $result = $service->commentList($request);

        $this->assertEquals('string', $result->comments[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->commentList($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testChangeStatusMethod(): void {

        $request = new ChangeStatusRequest(['review_id'], ReviewStatus::Processed);

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);
        $result = $service->changeStatus($request);

        $this->assertTrue($result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->changeStatus($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testCountMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_count_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);
        $result = $service->count();

        $this->assertEquals(0, $result->total);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->count();

    }

    /**
     * @throws OzonApiException
     */
    public function testInfoMethod(): void {

        $request = new InfoRequest('review_id');

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_info_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);
        $result = $service->info($request);

        $this->assertEquals('string', $result->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->info($request);

    }

    /**
     * @throws OzonApiException
     */
    public function testListMethod(): void {

        $request = new ListRequest();

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_list_v1')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewService($mockClient, $this->configuration, $this->serializer);
        $result = $service->list($request);

        $this->assertEquals('string', $result->reviews[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->list($request);

    }

}