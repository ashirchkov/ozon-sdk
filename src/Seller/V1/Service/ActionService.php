<?php

declare(strict_types=1);


namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ActionsResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\CandidatesRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\CandidatesResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsActivateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\ProductsActivateResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskListRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskListResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskApproveRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskDeclineRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskApproveResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Action\DiscountsTaskDeclineResponse;

class ActionService extends AbstractService
{

    /**
     * Список акций
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/Promos
     * @return ActionsResponse
     * @throws OzonApiException
     */
    public function actions(): ActionsResponse {

        return $this->sendRequest(HttpMethod::Get, '/v1/actions')
            ->toModel(ActionsResponse::class);

    }

    /**
     * Список доступных для акции товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/PromosCandidates
     * @param CandidatesRequest $request
     * @return CandidatesResponse
     * @throws OzonApiException
     */
    public function candidates(CandidatesRequest $request): CandidatesResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/candidates', $request)
            ->toModel(CandidatesResponse::class);

    }

    /**
     * Список участвующих в акции товаров
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/PromosProducts
     * @param ProductsRequest $request
     * @return ProductsResponse
     * @throws OzonApiException
     */
    public function products(ProductsRequest $request): ProductsResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/products', $request)
            ->toModel(ProductsResponse::class);

    }

    /**
     * Добавить товар в акцию
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/PromosProductsActivate
     * @param ProductsActivateRequest $request
     * @return ProductsActivateResponse
     * @throws OzonApiException
     */
    public function productsActivate(ProductsActivateRequest $request): ProductsActivateResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/products/activate', $request)
            ->toModel(ProductsActivateResponse::class);

    }

    /**
     * Удалить товары из акции
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/PromosProductsDeactivate
     * @param ProductsActivateRequest $request
     * @return ProductsActivateResponse
     * @throws OzonApiException
     */
    public function productsDeactivate(ProductsActivateRequest $request): ProductsActivateResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/products/deactivate', $request)
            ->toModel(ProductsActivateResponse::class);

    }

    /**
     * Список заявок на скидку
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/promos_task_list
     * @param DiscountsTaskListRequest $request
     * @return DiscountsTaskListResponse
     * @throws OzonApiException
     */
    public function discountsTaskList(DiscountsTaskListRequest $request): DiscountsTaskListResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/discounts-task/list', $request)
            ->toModel(DiscountsTaskListResponse::class);

    }

    /**
     * Согласовать заявку на скидку
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/promos_task_approve
     * @param DiscountsTaskApproveRequest $request
     * @return DiscountsTaskApproveResponse
     * @throws OzonApiException
     */
    public function discountsTaskApprove(DiscountsTaskApproveRequest $request): DiscountsTaskApproveResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/discounts-task/approve', $request)
            ->toModel(DiscountsTaskApproveResponse::class);

    }

    /**
     * Отклонить заявку на скидку
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/promos_task_decline
     * @param DiscountsTaskDeclineRequest $request
     * @return DiscountsTaskDeclineResponse
     * @throws OzonApiException
     */
    public function discountsTaskDecline(DiscountsTaskDeclineRequest $request): DiscountsTaskDeclineResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/actions/discounts-task/decline', $request)
            ->toModel(DiscountsTaskDeclineResponse::class);

    }

}