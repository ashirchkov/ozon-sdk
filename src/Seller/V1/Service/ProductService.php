<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ArchiveRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ArchiveResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportInfoResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\RatingBySkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\ImportBySkuResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\RatingBySkuResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UpdateOfferIdRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\GetRelatedSkuRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\PicturesImportRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UpdateOfferIdResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\GetRelatedSkuResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\PicturesImportResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoDescriptionRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\AttributesUpdateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoDescriptionResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoSubscriptionRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\AttributesUpdateResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\InfoSubscriptionResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UploadDigitalCodesRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UploadDigitalCodesResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UploadDigitalCodesInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Product\UploadDigitalCodesInfoResponse;

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

    /**
     * Получить контент-рейтинг товаров по SKU
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductRatingBySku
     * @param RatingBySkuRequest $request
     * @return RatingBySkuResponse
     * @throws OzonApiException
     */
    public function ratingBySku(RatingBySkuRequest $request): RatingBySkuResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/rating-by-sku', $request)
            ->toModel(RatingBySkuResponse::class);

    }

    /**
     * Получить описание товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductInfoDescription
     * @param InfoDescriptionRequest $request
     * @return InfoDescriptionResponse
     * @throws OzonApiException
     */
    public function infoDescription(InfoDescriptionRequest $request): InfoDescriptionResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/info/description', $request)
            ->toModel(InfoDescriptionResponse::class);

    }

    /**
     * Изменить артикулы товаров из системы продавца
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductUpdateOfferID
     * @param UpdateOfferIdRequest $request
     * @return UpdateOfferIdResponse
     * @throws OzonApiException
     */
    public function updateOfferId(UpdateOfferIdRequest $request): UpdateOfferIdResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/update/offer-id', $request)
            ->toModel(UpdateOfferIdResponse::class);

    }

    /**
     * Перенести товар в архив
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductArchive
     * @param ArchiveRequest $request
     * @return ArchiveResponse
     * @throws OzonApiException
     */
    public function archive(ArchiveRequest $request): ArchiveResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/archive', $request)
            ->toModel(ArchiveResponse::class);

    }

    /**
     * Вернуть товар из архива
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductUnarchive
     * @param ArchiveRequest $request
     * @return ArchiveResponse
     * @throws OzonApiException
     */
    public function unarchive(ArchiveRequest $request): ArchiveResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/unarchive', $request)
            ->toModel(ArchiveResponse::class);

    }

    /**
     * Загрузить коды активации для услуг и цифровых товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_UploadDigitalCode
     * @param UploadDigitalCodesRequest $request
     * @return UploadDigitalCodesResponse
     * @throws OzonApiException
     */
    public function uploadDigitalCodes(UploadDigitalCodesRequest $request): UploadDigitalCodesResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/upload_digital_codes', $request)
            ->toModel(UploadDigitalCodesResponse::class);

    }

    /**
     * Статус загрузки кодов активации
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_UploadDigitalCodeInfo
     * @param UploadDigitalCodesInfoRequest $request
     * @return UploadDigitalCodesInfoResponse
     * @throws OzonApiException
     */
    public function uploadDigitalCodesInfo(UploadDigitalCodesInfoRequest $request): UploadDigitalCodesInfoResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/upload_digital_codes/info', $request)
            ->toModel(UploadDigitalCodesInfoResponse::class);

    }

    /**
     * Количество подписавшихся на товар пользователей
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductInfoSubscription
     * @param InfoSubscriptionRequest $request
     * @return InfoSubscriptionResponse
     * @throws OzonApiException
     */
    public function infoSubscription(InfoSubscriptionRequest $request): InfoSubscriptionResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/info/subscription', $request)
            ->toModel(InfoSubscriptionResponse::class);

    }

    /**
     * Получить связанные SKU
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductGetRelatedSKU
     * @param GetRelatedSkuRequest $request
     * @return GetRelatedSkuResponse
     * @throws OzonApiException
     */
    public function getRelatedSku(GetRelatedSkuRequest $request): GetRelatedSkuResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/product/related-sku/get', $request)
            ->toModel(GetRelatedSkuResponse::class);

    }

}