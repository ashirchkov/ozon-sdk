<?php


namespace AlexeyShirchkov\Ozon\Rocket\Http;


class ApiRequest extends Request
{

    const API_URL = '/principal-integration-api/v1';

    public function setAuth(string $token, string $prefix = null) {
        $this->setHeader(
            'Authorization',
            is_null($prefix) ? $token : $prefix.' '.$token
        );
        return $this;
    }

    /**
     * @return Response
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    protected function send(): Response {
        return new ApiResponse(
            $this->client->getHttpClient()->sendRequest($this->request)
        );
    }

}