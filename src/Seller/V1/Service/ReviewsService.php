<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Service;

use AlexeyShirchkov\Ozon\Common\Enum\HttpMethod;
use AlexeyShirchkov\Ozon\Common\Enum\SortDirection;
use AlexeyShirchkov\Ozon\Common\Exception\OzonApiException;
use AlexeyShirchkov\Ozon\Seller\AbstractService;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatus;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatusFilter;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\CommentCreate;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\CommentList;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\Review;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\ReviewCount;
use AlexeyShirchkov\Ozon\Seller\V1\Models\Reviews\ReviewList;

class ReviewsService extends AbstractService
{

    /**
     * Оставить комментарий на отзыв
     * @param string $reviewId Идентификатор отзыва
     * @param string $text Текст комментария
     * @param bool|null $markReviewAsProcessed Обновление статуса у отзыва: true — статус изменится на Processed, false — статус не изменится
     * @param string|null $parentCommentId Идентификатор родительского комментария, на который вы отвечаете
     * @return CommentCreate
     * @throws OzonApiException
     */
    public function commentCreate(string $reviewId, string $text, ?bool $markReviewAsProcessed = null, ?string $parentCommentId = null): CommentCreate {

        $data = array_merge(
            ['review_id' => $reviewId, 'text' => $text],
            $markReviewAsProcessed ? ['mark_review_as_processed' => $markReviewAsProcessed] : [],
            $parentCommentId ? ['parent_comment_id' => $parentCommentId] : []
        );

        return $this->sendRequest(HttpMethod::Post, '/v1/review/comment/create', $data)
            ->toModel(CommentCreate::class);

    }

    /**
     * Удалить комментарий на отзыв
     * @param string $commentId Идентификатор комментария
     * @return true
     * @throws OzonApiException
     */
    public function commentDelete(string $commentId): true {

        $this->sendRequest(HttpMethod::Post, '/v1/review/comment/delete', ['comment_id' => $commentId]);

        return true;

    }

    /**
     * Список комментариев на отзыв
     * @param string $reviewId Идентификатор отзыва
     * @param int $limit Ограничение значений в ответе. Минимум — 20. Максимум — 100
     * @param int $offset Количество элементов, которое будет пропущено с начала списка в ответе. Например, если offset = 10, то ответ начнётся с 11-го найденного элемента
     * @param SortDirection $sortDir Направление сортировки: ASC — по возрастанию, DESC — по убыванию
     * @return CommentList
     * @throws OzonApiException
     */
    public function commentList(string $reviewId, int $limit = 20, int $offset = 0, SortDirection $sortDir = SortDirection::Asc): CommentList {

        $data = [
            'review_id' => $reviewId,
            'limit' => $limit,
            'offset' => $offset,
            'sort_dir' => strtoupper($sortDir->value),
        ];

        return $this->sendRequest(HttpMethod::Post, '/v1/review/comment/list', $data)
            ->toModel(CommentList::class);

    }

    /**
     * Изменить статус отзывов
     * @param string[] $reviewIds Массив с идентификаторами отзывов от 1 до 100.
     * @param ReviewStatus $status Статус отзыва: PROCESSED — обработанный, UNPROCESSED — необработанный
     * @return true
     * @throws OzonApiException
     */
    public function changeStatus(array $reviewIds, ReviewStatus $status): true {

        $data = [
            'review_ids' => $reviewIds,
            'status' => $status->value
        ];

        $this->sendRequest(HttpMethod::Post, '/v1/review/change-status', $data);

        return true;

    }

    /**
     * Количество отзывов по статусам
     * @return ReviewCount
     * @throws OzonApiException
     */
    public function count(): ReviewCount {
        return $this->sendRequest(HttpMethod::Post, '/v1/review/count')
            ->toModel(ReviewCount::class);
    }

    /**
     * Получить информацию об отзыве
     * @param string $reviewId Идентификатор отзыва
     * @return Review
     * @throws OzonApiException
     */
    public function info(string $reviewId): Review {
        return $this->sendRequest(HttpMethod::Post, '/v1/review/info', ['review_id' => $reviewId])
            ->toModel(Review::class);
    }

    /**
     * Получить список отзывов
     * @param int $limit Количество отзывов в ответе. Минимум — 20, максимум — 100
     * @param string|null $lastId Идентификатор последнего отзыва на странице
     * @param ReviewStatusFilter $status Статусы отзывов: ALL — все, UNPROCESSED — необработанные, PROCESSED — обработанные
     * @param SortDirection $sortDir Направление сортировки: ASC — по возрастанию, DESC — по убыванию
     * @return ReviewList
     * @throws OzonApiException
     */
    public function list(int $limit = 20, ?string $lastId = null, ReviewStatusFilter $status = ReviewStatusFilter::All, SortDirection $sortDir = SortDirection::Asc): ReviewList {

        $data = array_merge(
            [
                'limit' => $limit,
                'status' => $status->value,
                'sort_dir' => strtoupper($sortDir->value)
            ],
            $lastId ? ['last_id' => $lastId] : []
        );

        return $this->sendRequest(HttpMethod::Post, '/v1/review/list', $data)
            ->toModel(ReviewList::class);

    }

}