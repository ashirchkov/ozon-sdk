<?php

namespace AlexeyShirchkov\Ozon\Logistics\Http;

class AuthRequest extends Request
{

    const API_URL = '/principal-auth-api/connect/token';

    /**
     * @return Response
     * @throws \Psr\Http\Client\ClientExceptionInterface
     */
    protected function send(): Response {
        return new AuthResponse(
            $this->client->getHttpClient()->sendRequest($this->request)
        );
    }

}