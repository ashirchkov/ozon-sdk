<?php

namespace AlexeyShirchkov\Ozon\Tests\Unit\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Service\ReviewsService;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Tests\Unit\Seller\ServiceTestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;

class ReviewsServiceTest extends ServiceTestCase
{

    /**
     * @throws OzonApiException
     */
    public function testCommentCreateMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);
        $result = $service->commentCreate('review_id', 'comment');

        $this->assertEquals('12345', $result->comment_id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->commentCreate('review_id', 'comment');

    }

    /**
     * @throws OzonApiException
     */
    public function testCommentDeleteMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(),
            MockResponseFactory::createErrorResponse($this->fixtureLoader->load('api_error')),
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);

        $result = $service->commentDelete('review_id');
        $this->assertTrue($result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->commentDelete('review_id');

    }

    /**
     * @throws OzonApiException
     */
    public function testCommentListMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_list')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);
        $result = $service->commentList('review_id');

        $this->assertEquals('string', $result->comments[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->commentList('review_id');

    }

    /**
     * @throws OzonApiException
     */
    public function testChangeStatusMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);
        $result = $service->changeStatus(['review_id'], ReviewStatus::Processed);

        $this->assertTrue($result);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->changeStatus(['review_id'], ReviewStatus::Processed);

    }

    public function testCountMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_count')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);
        $result = $service->count();

        $this->assertEquals(0, $result->total);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->count();

    }

    public function testInfoMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_info')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);
        $result = $service->info('review_id');

        $this->assertEquals('string', $result->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->info('review_id');

    }

    public function testListMethod(): void {

        $mockHandler = new MockHandler([
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_list')
            ),
            MockResponseFactory::createErrorResponse(
                $this->fixtureLoader->load('api_error')
            )
        ]);

        $mockClient = new Client(['handler' => HandlerStack::create($mockHandler)]);
        $service = new ReviewsService($mockClient, $this->configuration, $this->serializer);
        $result = $service->list();

        $this->assertEquals('string', $result->reviews[0]->id);

        $this->expectException(OzonApiException::class);
        $this->expectExceptionMessage('string');
        $service->list();

    }

}