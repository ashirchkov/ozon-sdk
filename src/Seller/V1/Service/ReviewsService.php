<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\InfoRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ListRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\InfoResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ListResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentListRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentListResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ReviewCountResponse;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\ChangeStatusRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentCreateRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentDeleteRequest;
use AlexeyShirchkov\Ozon\Seller\V1\Model\Review\CommentCreateResponse;

class ReviewsService extends AbstractService
{

    /**
     * Оставить комментарий на отзыв
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_CommentCreate
     * @param CommentCreateRequest $request
     * @return CommentCreateResponse
     * @throws OzonApiException
     */
    public function commentCreate(CommentCreateRequest $request): CommentCreateResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/review/comment/create', $request)
            ->toModel(CommentCreateResponse::class);

    }

    /**
     * Удалить комментарий на отзыв
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_CommentDelete
     * @param CommentDeleteRequest $request
     * @return bool
     * @throws OzonApiException
     */
    public function commentDelete(CommentDeleteRequest $request): bool {

        $this->sendRequest(HttpMethod::Post, '/v1/review/comment/delete', $request);

        return true;

    }

    /**
     * Список комментариев на отзыв
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_CommentList
     * @param CommentListRequest $request
     * @return CommentListResponse
     * @throws OzonApiException
     */
    public function commentList(CommentListRequest $request): CommentListResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/review/comment/list', $request)
            ->toModel(CommentListResponse::class);

    }

    /**
     * Изменить статус отзывов
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_ReviewChangeStatus
     * @param ChangeStatusRequest $request
     * @return bool
     * @throws OzonApiException
     */
    public function changeStatus(ChangeStatusRequest $request): bool {

        $this->sendRequest(HttpMethod::Post, '/v1/review/change-status', $request);

        return true;

    }

    /**
     * Количество отзывов по статусам
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_ReviewCount
     * @return ReviewCountResponse
     * @throws OzonApiException
     */
    public function count(): ReviewCountResponse {
        return $this->sendRequest(HttpMethod::Post, '/v1/review/count')
            ->toModel(ReviewCountResponse::class);
    }

    /**
     * Получить информацию об отзыве
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_ReviewInfo
     * @param InfoRequest $request
     * @return InfoResponse
     * @throws OzonApiException
     */
    public function info(InfoRequest $request): InfoResponse {
        return $this->sendRequest(HttpMethod::Post, '/v1/review/info', $request)
            ->toModel(InfoResponse::class);
    }

    /**
     * Получить список отзывов
     * @link https://docs.ozon.ru/api/seller/?__rr=1#operation/ReviewAPI_ReviewList
     * @param ListRequest $request
     * @return ListResponse
     * @throws OzonApiException
     */
    public function list(ListRequest $request): ListResponse {

        return $this->sendRequest(HttpMethod::Post, '/v1/review/list', $request)
            ->toModel(ListResponse::class);

    }

}