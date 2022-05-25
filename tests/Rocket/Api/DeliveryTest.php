<?php

namespace AlexeyShirchkov\Ozon\Tests\Rocket\Api;

use AlexeyShirchkov\Ozon\Rocket\Http\Response;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryByAddressResult;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryByAddressShortResult;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryByViewPortResult;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryCalculateResult;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryFromPlace;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryFromPlacesResult;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryTimeResult;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryVariant;
use AlexeyShirchkov\Ozon\Rocket\Models\DeliveryVariantsResult;
use AlexeyShirchkov\Ozon\Tests\Rocket\ApiClient;
use GuzzleHttp\Handler\MockHandler;
use PHPUnit\Framework\TestCase;

class DeliveryTest extends TestCase
{

    /**
     * @dataProvider byViewportResponse
     * @param $viewportResponse
     */
    public function testByViewport($viewportResponse) {

        $mock = new MockHandler([
            new \GuzzleHttp\Psr7\Response(200, [], $viewportResponse),
        ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()
            ->setAuth('string', 'string')
            ->byViewport([
                'deliveryTypes' => ['string'],
                'viewPort' => [
                    'rightTop' => [],
                    'leftBottom' => [],
                    'zoom' => 0
                ],
                'packages' => [[]],
                'filter' => [
                    'isCashAvailable' => true,
                    'isPaymentCardAvailable' => true,
                    'isAnyPaymentAvailable' => true
                ]
            ]);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryByViewPortResult::class,
            $response->getResult(DeliveryByViewPortResult::class)
        );

    }

    public function byViewportResponse() {
        return [['{"data":[{"id":0,"objectTypeId":0,"objectTypeName":"string","name":"string","description":"string","address":"string","region":"string","settlement":"string","streets":"string","placement":"string","enabled":true,"cityId":0,"fiasGuid":"4595c75d-e01d-4d43-be28-3999431da00f","fiasGuidControl":"3d9fa4a4-f60a-48d0-89dd-1f4875057cec","addressElementId":0,"fittingShoesAvailable":true,"fittingClothesAvailable":true,"cardPaymentAvailable":true,"howToGet":"string","phone":"string","contractorName":"string","contractorId":0,"stateName":"string","minWeight":0,"maxWeight":0,"minPrice":0,"maxPrice":0,"restrictionWidth":0,"restrictionLength":0,"restrictionHeight":0,"lat":"string","long":"string","returnAvailable":true,"partialGiveOutAvailable":true,"dangerousAvailable":true,"isCashForbidden":true,"code":"string","wifiAvailable":true,"legalEntityNotAvailable":true,"dateOpen":"2019-08-24T14:15:22Z","dateClose":"2019-08-24T14:15:22Z","isRestrictionAccess":true,"restrictionAccessMessage":"string","utcOffsetStr":"string","isPartialPrepaymentForbidden":true,"isGeozoneAvailable":true,"postalCode":0,"workingHours":[{"date":"2019-08-24T14:15:22Z","periods":[{"min":[{"hours":0,"minutes":0}],"max":[{"hours":0,"minutes":0}]}]}]}]}']];
    }

    /**
     * @dataProvider timeResponse
     * @param $timeResponse
     */
    public function testTime($timeResponse) {

        $mock = new MockHandler([
                new \GuzzleHttp\Psr7\Response(200, [], $timeResponse),
            ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()
            ->setAuth('string', 'string')
            ->time([
                'fromPlaceId' => 0,
                'deliveryVariantId' => 0
            ]);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryTimeResult::class,
            $response->getResult(DeliveryTimeResult::class)
        );

    }

    public function timeResponse() {
        return [['{"days": 0}']];
    }

    /**
     * @dataProvider fromPlacesResponse
     * @param $fromPlacesResponse
     */
    public function testFromPlaces($fromPlacesResponse) {

        $mock = new MockHandler([
                new \GuzzleHttp\Psr7\Response(200, [], $fromPlacesResponse),
            ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()->setAuth('string', 'string')->fromPlaces();

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryFromPlacesResult::class,
            $response->getResult(DeliveryFromPlacesResult::class)
        );

    }

    public function fromPlacesResponse() {
        return [['{"places":[{"id":0,"name":"string","city":"string","address":"string","utcOffset":"string"}]}']];
    }

    /**
     * @dataProvider variantsResponse
     * @param $variantsResponse
     */
    public function testVariants($variantsResponse) {

        $mock = new MockHandler([
                new \GuzzleHttp\Psr7\Response(200, [], $variantsResponse),
            ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()
            ->setAuth('string', 'string')
            ->variants([
                'cityName' => 'string',
                'payloadIncludes' => [
                    'includeWorkingHours' => true,
                    'includePostalCode' => true
                ],
                'pagination' => [
                    'size' => 0,
                    'token' => 'string'
                ]
            ]);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryVariantsResult::class,
            $response->getResult(DeliveryVariantsResult::class)
        );

    }

    public function variantsResponse() {
        return [['{"data":[{"id":0,"objectTypeId":0,"objectTypeName":"string","name":"string","description":"string","address":"string","region":"string","settlement":"string","streets":"string","placement":"string","enabled":true,"cityId":0,"fiasGuid":"4595c75d-e01d-4d43-be28-3999431da00f","fiasGuidControl":"3d9fa4a4-f60a-48d0-89dd-1f4875057cec","addressElementId":0,"fittingShoesAvailable":true,"fittingClothesAvailable":true,"cardPaymentAvailable":true,"howToGet":"string","phone":"string","contractorName":"string","contractorId":0,"stateName":"string","minWeight":0,"maxWeight":0,"minPrice":0,"maxPrice":0,"restrictionWidth":0,"restrictionLength":0,"restrictionHeight":0,"lat":"string","long":"string","returnAvailable":true,"partialGiveOutAvailable":true,"dangerousAvailable":true,"isCashForbidden":true,"code":"string","wifiAvailable":true,"legalEntityNotAvailable":true,"dateOpen":"2019-08-24T14:15:22Z","dateClose":"2019-08-24T14:15:22Z","isRestrictionAccess":true,"restrictionAccessMessage":"string","utcOffsetStr":"string","isPartialPrepaymentForbidden":true,"isGeozoneAvailable":true,"postalCode":0,"workingHours":[{"date":"2019-08-24T14:15:22Z","periods":[{"min":[{"hours":0,"minutes":0}],"max":[{"hours":0,"minutes":0}]}]}]}],"totalCount":0,"nextPageToken":"string"}']];
    }

    /**
     * @dataProvider calculateResponse
     * @param $calculateResponse
     */
    public function testCalculate($calculateResponse) {

        $mock = new MockHandler([
                new \GuzzleHttp\Psr7\Response(200, [], $calculateResponse),
            ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()
            ->setAuth('string', 'string')
            ->calculate([
                'deliveryVariantId' => 0,
                'weight' => 0,
                'fromPlaceId' => 0,
            ]);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryCalculateResult::class,
            $response->getResult(DeliveryCalculateResult::class)
        );

    }

    public function calculateResponse() {
        return [['{"amount": 0}']];
    }

    /**
     * @dataProvider byAddressResponse
     * @param $byAddressResponse
     */
    public function testByAddress($byAddressResponse) {

        $mock = new MockHandler([
                new \GuzzleHttp\Psr7\Response(200, [], $byAddressResponse),
            ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()
            ->setAuth('string', 'string')
            ->byAddress([
                'deliveryType' => 'string',
                'filter' => [
                    'isCashAvailable' => true,
                    'isPaymentCardAvailable' => true,
                    'isAnyPaymentAvailable' => true
                ],
                'address' => 'string',
                'radius' => 0,
                'packages' => [
                    'count' => 0,
                    'dimensions' => [
                        'weight' => 0,
                        'length' => 0,
                        'height' => 0,
                        'width' => 0
                    ],
                    'price' => 0,
                    'estimatedPrice' => 0
                ],
            ]);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryByAddressResult::class,
            $response->getResult(DeliveryByAddressResult::class)
        );

    }

    public function byAddressResponse() {
        return [['{"data":[{"id":0,"objectTypeId":0,"objectTypeName":"string","name":"string","description":"string","address":"string","region":"string","settlement":"string","streets":"string","placement":"string","enabled":true,"cityId":0,"fiasGuid":"4595c75d-e01d-4d43-be28-3999431da00f","fiasGuidControl":"3d9fa4a4-f60a-48d0-89dd-1f4875057cec","addressElementId":0,"fittingShoesAvailable":true,"fittingClothesAvailable":true,"cardPaymentAvailable":true,"howToGet":"string","phone":"string","contractorName":"string","contractorId":0,"stateName":"string","minWeight":0,"maxWeight":0,"minPrice":0,"maxPrice":0,"restrictionWidth":0,"restrictionLength":0,"restrictionHeight":0,"lat":"string","long":"string","returnAvailable":true,"partialGiveOutAvailable":true,"dangerousAvailable":true,"isCashForbidden":true,"code":"string","wifiAvailable":true,"legalEntityNotAvailable":true,"dateOpen":"2019-08-24T14:15:22Z","dateClose":"2019-08-24T14:15:22Z","isRestrictionAccess":true,"restrictionAccessMessage":"string","utcOffsetStr":"string","isPartialPrepaymentForbidden":true,"isGeozoneAvailable":true,"postalCode":0,"workingHours":[{"date":"2019-08-24T14:15:22Z","periods":[{"min":[{"hours":0,"minutes":0}],"max":[{"hours":0,"minutes":0}]}]}]}]}']];
    }

    /**
     * @dataProvider byAddressShortResponse
     * @param $byAddressShortResponse
     */
    public function testByAddressShort($byAddressShortResponse) {

        $mock = new MockHandler([
                new \GuzzleHttp\Psr7\Response(200, [], $byAddressShortResponse),
            ] + $this->getErrorHandlers());

        $client = new ApiClient($mock);

        $response = $client->delivery()
            ->setAuth('string', 'string')
            ->byAddressShort([
                'deliveryTypes' => [
                    'Courier',
                    'PickPoint',
                    'Postamat'
                ],
                'address' => 'string',
                'radius' => 0,
                'packages' => [
                    'count' => 0,
                    'dimensions' => [
                        'weight' => 0,
                        'length' => 0,
                        'height' => 0,
                        'width' => 0
                    ],
                    'price' => 0,
                    'estimatedPrice' => 0
                ],
                'limit' => 0
            ]);

        $this->assertInstanceOf(Response::class, $response);
        $this->assertEquals(200, $response->getStatus());
        $this->assertNotEmpty($response->getBody());

        $this->assertInstanceOf(
            DeliveryByAddressShortResult::class,
            $response->getResult(DeliveryByAddressShortResult::class)
        );

    }

    public function byAddressShortResponse() {
        return [['{"deliveryVariantIds":[0]}']];
    }

    public function getErrorHandlers() {
        return [
            new \GuzzleHttp\Psr7\Response(400, [], $this->getErrorResponse()),
            new \GuzzleHttp\Psr7\Response(401, [], $this->getErrorResponse()),
            new \GuzzleHttp\Psr7\Response(403, [], $this->getErrorResponse()),
            new \GuzzleHttp\Psr7\Response(404, [], $this->getErrorResponse()),
            new \GuzzleHttp\Psr7\Response(500, [], $this->getErrorResponse())
        ];
    }

    public function getErrorResponse() {
        return '{"message":"string","errorCode":"string","arguments":{"property1":["string"],"property2":["string"]},"extensions":{"property1":null,"property2":null},"httpStatusCode":0}';
    }

}
