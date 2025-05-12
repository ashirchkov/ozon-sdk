<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Review;

use AlexeyShirchkov\Ozon\Common\Enum\SortDirection;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V1\Enum\ReviewStatusFilter;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class ListRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $limit Количество отзывов в ответе. Минимум — 20, максимум — 100
     * @param string|null $last_id Идентификатор последнего отзыва на странице
     * @param ReviewStatusFilter $status Статусы отзывов: ALL — все, UNPROCESSED — необработанные, PROCESSED — обработанные
     * @param SortDirection $sort_dir Направление сортировки: ASC — по возрастанию, DESC — по убыванию
     */
    public function __construct(
        public int $limit = 20,
        public ?string $last_id = null,
        public ReviewStatusFilter $status = ReviewStatusFilter::All,
        public SortDirection $sort_dir = SortDirection::Asc
    ) {}

    public function jsonSerialize(): array {
        return array_merge(
            get_object_vars($this),
            ['sort_dir' => strtoupper($this->sort_dir->value)]
        );
    }

}