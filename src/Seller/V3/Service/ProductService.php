<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Service;

use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ListRequest;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ListResponse;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ImportRequest;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\ImportResponse;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\InfoListRequest;
use AlexeyShirchkov\Ozon\Seller\V3\Model\Product\InfoListResponse;

class ProductService extends AbstractService
{

    /**
     * Создать или обновить товар
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ImportProductsV3
     * @param ImportRequest $request
     * @return ImportResponse
     * @throws OzonApiException
     */
    public function import(ImportRequest $request): ImportResponse {

        return $this->sendRequest(HttpMethod::Post, '/v3/product/import', $request)
            ->toModel(ImportResponse::class);

    }

    /**
     * Список товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductList
     * @param ListRequest $request
     * @return ListResponse
     * @throws OzonApiException
     */
    public function list(ListRequest $request): ListResponse {

        return $this->sendRequest(HttpMethod::Post, '/v3/product/list', $request)
            ->toModel(ListResponse::class);

    }

    /**
     * Получить информацию о товарах по идентификаторам
     * @list https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductInfoList
     * @param InfoListRequest $request
     * @return InfoListResponse
     * @throws OzonApiException
     */
    public function infoList(InfoListRequest $request): InfoListResponse {

        return $this->sendRequest(HttpMethod::Post, '/v3/product/info/list', $request)
            ->toModel(InfoListResponse::class);

    }

}