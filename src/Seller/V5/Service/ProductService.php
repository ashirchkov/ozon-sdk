<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V5\Service;

use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V5\Model\Product\InfoPricesRequest;
use AlexeyShirchkov\Ozon\Seller\V5\Model\Product\InfoPricesResponse;

class ProductService extends AbstractService
{

    /**
     * Получить информацию о цене товара
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ProductAPI_GetProductInfoPrices
     * @param InfoPricesRequest $request
     * @return InfoPricesResponse
     * @throws OzonApiException
     */
    public function infoPrices(InfoPricesRequest $request): InfoPricesResponse {

        return $this->sendRequest(HttpMethod::Post, '/v5/product/info/prices', $request)
            ->toModel(InfoPricesResponse::class);

    }

}