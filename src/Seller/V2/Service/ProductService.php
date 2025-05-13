<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V2\Service;

use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\DeleteRequest;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\DeleteResponse;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\PicturesInfoRequest;
use AlexeyShirchkov\Ozon\Seller\V2\Model\Product\PicturesInfoResponse;

class ProductService extends AbstractService
{

    /**
     * Удалить товар без SKU из архива
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_DeleteProducts
     * @param DeleteRequest $request
     * @return DeleteResponse
     * @throws OzonApiException
     */
    public function delete(DeleteRequest $request): DeleteResponse {

        return $this->sendRequest(HttpMethod::Post, '/v2/products/delete', $request)
            ->toModel(DeleteResponse::class);

    }

    /**
     * Получить изображения товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_ProductInfoPicturesV2
     * @param PicturesInfoRequest $request
     * @return PicturesInfoResponse
     * @throws OzonApiException
     */
    public function picturesInfo(PicturesInfoRequest $request): PicturesInfoResponse {

        return $this->sendRequest(HttpMethod::Post, '/v2/product/pictures/info', $request)
            ->toModel(PicturesInfoResponse::class);

    }

}