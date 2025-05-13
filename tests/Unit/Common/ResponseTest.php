<?php

namespace AlexeyShirchkov\Ozon\Tests\Unit\Common;

use stdClass;
use LogicException;
use AlexeyShirchkov\Ozon\Tests\TestCase;
use AlexeyShirchkov\Ozon\Common\Http\Response;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ReviewCountResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentCreateResponse;

class ResponseTest extends TestCase
{

    public function testInstantiateWithNonJsonContentTypeResponse() {

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/json format/i');

        new Response(
            MockResponseFactory::createInvalidResponse(200),
            $this->serializer
        );

    }

    public function testIsSuccessMethod() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse(),
            $this->serializer
        );
        $this->assertTrue($response->isSuccess());

        $response = new Response(
            MockResponseFactory::createErrorResponse(),
            $this->serializer
        );
        $this->assertFalse($response->isSuccess());

    }

    public function testToModelMethodWithValidModelClass() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create_v1')
            ),
            $this->serializer
        );

        $commentCreate = $response->toModel(CommentCreateResponse::class);

        $this->assertInstanceOf(CommentCreateResponse::class, $commentCreate);
        $this->assertEquals('12345', $commentCreate->comment_id);

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/cannot create an instance/i');
        $response->toModel(ReviewCountResponse::class);

    }

    public function testToModelMethodWithNonModelClass() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create_v1')
            ),
            $this->serializer
        );

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/must implement the/i');
        $response->toModel(stdClass::class);

    }

    public function testToModelMethodWithInvalidJson() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse('foo bar'),
            $this->serializer
        );

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/syntax error/i');
        $response->toModel(CommentCreateResponse::class);

    }

    public function testToArrayMethodWithValidJson() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create_v1')
            ),
            $this->serializer
        );
        $this->assertEquals(['comment_id' => '12345'], $response->toArray());

    }

    public function testToArrayMethodWithInvalidJson() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse('foo bar'),
            $this->serializer
        );

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/syntax error/i');
        $response->toArray();

    }

}