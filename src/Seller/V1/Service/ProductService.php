<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportInfoResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkuResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\PicturesImportRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\PicturesImportResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\AttributesUpdateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\AttributesUpdateResponse;

class ProductService extends AbstractService
{

    /**
     * Узнать статус добавления или обновления товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetImportProductsInfo
     * @param ImportInfoRequest $request
     * @return ImportInfoResponse
     * @throws OzonApiException
     */
    public function importInfo(ImportInfoRequest $request): ImportInfoResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/import/info', $request)
            ->toModel(ImportInfoResponse::class);

    }

    /**
     * Создать товар по SKU
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ImportProductsBySKU
     * @param ImportBySkuRequest $request
     * @return ImportBySkuResponse
     * @throws OzonApiException
     */
    public function importBySku(ImportBySkuRequest $request): ImportBySkuResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/import-by-sku', $request)
            ->toModel(ImportBySkuResponse::class);

    }

    /**
     * Обновить характеристики товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductUpdateAttributes
     * @param AttributesUpdateRequest $request
     * @return AttributesUpdateResponse
     * @throws OzonApiException
     */
    public function attributesUpdate(AttributesUpdateRequest $request): AttributesUpdateResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/attributes/update', $request)
            ->toModel(AttributesUpdateResponse::class);

    }

    /**
     * Загрузить или обновить изображения товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductImportPictures
     * @param PicturesImportRequest $request
     * @return PicturesImportResponse
     * @throws OzonApiException
     */
    public function picturesImport(PicturesImportRequest $request): PicturesImportResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/pictures/import', $request)
            ->toModel(PicturesImportResponse::class);

    }

}