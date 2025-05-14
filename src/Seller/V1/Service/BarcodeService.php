<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\AddRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\AddResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\GenerateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Barcode\GenerateResponse;

class BarcodeService extends AbstractService
{

    /**
     * Привязать штрихкод к товару
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/add-barcode
     * @param AddRequest $request
     * @return AddResponse
     * @throws OzonApiException
     */
    public function add(AddRequest $request): AddResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/barcode/add', $request)
            ->toModel(AddResponse::class);

    }

    /**
     * Создать штрихкод для товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/generate-barcode
     * @param GenerateRequest $request
     * @return GenerateResponse
     * @throws OzonApiException
     */
    public function generate(GenerateRequest $request): GenerateResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/barcode/generate', $request)
            ->toModel(GenerateResponse::class);

    }

}