<?php

namespace AlexeyShirchkov\Ozon\Logistics\Api;

use AlexeyShirchkov\Ozon\Common\Enums\MimeTypes;
use AlexeyShirchkov\Ozon\Logistics\Http\AuthRequest;

class Auth extends AuthRequest
{

    public function authorize(string $clientId, string $clientSecret, string $grantType) {

        return $this->setMethod('POST')
            ->setPath(self::API_URL)
            ->setHeader('Content-Type', MimeTypes::FORM_URLENCODED_TYPE)
            ->setBody([
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'grant_type' => $grantType
            ])
            ->send();

    }

}