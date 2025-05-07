<?php

namespace AlexeyShirchkov\Ozon\Tests\Unit\Common;

use AlexeyShirchkov\Ozon\Common\Http\Response;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\CommentCreate;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\ReviewCount;
use AlexeyShirchkov\Ozon\Tests\Support\Factory\MockResponseFactory;
use AlexeyShirchkov\Ozon\Tests\TestCase;
use LogicException;
use stdClass;

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
                $this->fixtureLoader->load('reviews_comment_create')
            ),
            $this->serializer
        );

        $commentCreate = $response->toModel(CommentCreate::class);

        $this->assertInstanceOf(CommentCreate::class, $commentCreate);
        $this->assertEquals('12345', $commentCreate->comment_id);

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/cannot create an instance/i');
        $response->toModel(ReviewCount::class);

    }

    public function testToModelMethodWithNonModelClass() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create')
            ),
            $this->serializer
        );

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/not a valid model/i');
        $response->toModel(stdClass::class);

    }

    public function testToModelMethodWithInvalidJson() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse('foo bar'),
            $this->serializer
        );

        $this->expectException(LogicException::class);
        $this->expectExceptionMessageMatches('/syntax error/i');
        $response->toModel(CommentCreate::class);

    }

    public function testToArrayMethodWithValidJson() {

        $response = new Response(
            MockResponseFactory::createSuccessResponse(
                $this->fixtureLoader->load('reviews_comment_create')
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