<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\TreeRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\TreeResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeValuesRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeValuesResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeValuesSearchRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\DescriptionCategory\AttributeValuesSearchResponse;

class DescriptionCategoryService extends AbstractService
{

    /**
     * Дерево категорий и типов товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/DescriptionCategoryAPI_GetTree
     * @param TreeRequest $request
     * @return TreeResponse
     * @throws OzonApiException
     */
    public function tree(TreeRequest $request): TreeResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/description-category/tree', $request)
            ->toModel(TreeResponse::class);

    }

    /**
     * Список характеристик категории
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/DescriptionCategoryAPI_GetAttributes
     * @param AttributeRequest $request
     * @return AttributeResponse
     * @throws OzonApiException
     */
    public function attribute(AttributeRequest $request): AttributeResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/description-category/attribute', $request)
            ->toModel(AttributeResponse::class);

    }

    /**
     * Справочник значений характеристики
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/DescriptionCategoryAPI_GetAttributes
     * @param AttributeValuesRequest $request
     * @return AttributeValuesResponse
     * @throws OzonApiException
     */
    public function attributeValues(AttributeValuesRequest $request): AttributeValuesResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/description-category/attribute/values', $request)
            ->toModel(AttributeValuesResponse::class);

    }

    /**
     * Поиск по справочным значениям характеристики
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/DescriptionCategoryAPI_SearchAttributeValues
     * @param AttributeValuesSearchRequest $request
     * @return AttributeValuesSearchResponse
     * @throws OzonApiException
     */
    public function attributeValuesSearch(AttributeValuesSearchRequest $request): AttributeValuesSearchResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/description-category/attribute/values/search', $request)
            ->toModel(AttributeValuesSearchResponse::class);

    }

}