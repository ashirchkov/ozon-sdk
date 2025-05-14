<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Service;

use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoLimitResponse;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoStocksRequest;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoStocksResponse;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoAttributesRequest;
use AlexeyShirchkov\Ozon\Seller\V4\Model\Product\InfoAttributesResponse;

class ProductService extends AbstractService
{

    /**
     * Получить описание характеристик товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductAttributesV4
     * @param InfoAttributesRequest $request
     * @return InfoAttributesResponse
     * @throws OzonApiException
     */
    public function infoAttributes(InfoAttributesRequest $request): InfoAttributesResponse {

        return $this->sendRequest(HttpMethod::Post, '/v4/product/info/attributes', $request)
            ->toModel(InfoAttributesResponse::class);

    }

    /**
     * Лимиты на ассортимент, создание и обновление товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetUploadQuota
     * @return InfoLimitResponse
     * @throws OzonApiException
     */
    public function infoLimit(): InfoLimitResponse {

        return $this->sendRequest(HttpMethod::Post, '/v4/product/info/limit')
            ->toModel(InfoLimitResponse::class);

    }

    /**
     * Информация о количестве товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductInfoStocks
     * @param InfoStocksRequest $request
     * @return InfoStocksResponse
     * @throws OzonApiException
     */
    public function infoStocks(InfoStocksRequest $request): InfoStocksResponse {

        return $this->sendRequest(HttpMethod::Post, '/v4/product/info/stocks', $request)
            ->toModel(InfoStocksResponse::class);

    }

}