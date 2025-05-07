<?php

namespace AlexeyShirchkov\Ozon\Tests\Support\Factory;

use AlexeyShirchkov\Ozon\Common\Enum\MimeType;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class MockResponseFactory
{

    public static function createJsonResponse(int $code, ?string $body = null): ResponseInterface {
        return new Response($code, ['Content-Type' => MimeType::ApplicationJson->value], $body);
    }

    public static function createSuccessResponse(?string $body = null): ResponseInterface {
        return self::createJsonResponse(200, $body);
    }

    public static function createErrorResponse(?string $body = null): ResponseInterface {
        return self::createJsonResponse(400, $body);
    }

    public static function createInvalidResponse(int $code, ?string $body = null): ResponseInterface {
        return new Response($code, ['Content-Type' => MimeType::ApplicationXml->value], $body);
    }

}