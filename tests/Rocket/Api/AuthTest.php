<?php

namespace AlexeyShirchkov\Ozon\Tests\Rocket\Api;

use AlexeyShirchkov\Ozon\Rocket\Http\Response;
use AlexeyShirchkov\Ozon\Rocket\Models\AuthResult;
use AlexeyShirchkov\Ozon\Tests\Rocket\ApiClient;
use AlexeyShirchkov\Ozon\Tests\Rocket\Constants;
use GuzzleHttp\Handler\MockHandler;
use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{

    /**
     * @dataProvider authResponse
     * @param $authResponse
     */
    public function testAuthorize($authResponse) {

        $mock = new MockHandler([
            new \GuzzleHttp\Psr7\Response(200, ['Content-type' => 'application/json'], $authResponse)
        ]);

        $client = new ApiClient($mock);

        $response = $client
            ->auth()
            ->authorize(
                Constants::CLIENT_ID,
                Constants::CLIENT_SECRET,
                Constants::GRANT_TYPE
            );

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());
        $this->assertJson($response->getBody());

        $this->assertInstanceOf(
            AuthResult::class,
            $response->getResult(AuthResult::class)
        );

    }

    public function authResponse() {
        return [['{"access_token":"string","expires_in":0,"token_type":"string","scope":"string"}']];
    }

}
