<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Enum\SortDirection;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class CommentListRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param string $review_id Идентификатор отзыва
     * @param int $limit Ограничение значений в ответе. Минимум — 20. Максимум — 100
     * @param int $offset Количество элементов, которое будет пропущено с начала списка в ответе. Например, если offset = 10, то ответ начнётся с 11-го найденного элемента
     * @param SortDirection $sort_dir Направление сортировки: ASC — по возрастанию, DESC — по убыванию
     */
    public function __construct(
        public string $review_id,
        public int $limit = 20,
        public int $offset = 0,
        public SortDirection $sort_dir = SortDirection::Asc
    ) {}
}