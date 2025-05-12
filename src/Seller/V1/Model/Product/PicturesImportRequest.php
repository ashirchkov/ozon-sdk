<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Model\Product;

use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Common\Contract\ApiRequestInterface;

readonly class PicturesImportRequest extends AbstractModel implements ApiRequestInterface
{
    /**
     * @param int $productId Идентификатор товара в системе продавца — product_id
     * @param array|null $images Массив ссылок на изображения. Изображения в массиве расположены в порядке их расположения на сайте. Первое изображение в массиве будет главным
     * @param array|null $images360 Массив изображений 360. До 70 штук. Формат: адрес ссылки на изображение в общедоступном облачном хранилище. Формат изображения по ссылке — JPG
     * @param string|null $colorImage Маркетинговый цвет
     */
    public function __construct(
        public int $productId,
        public ?array $images = null,
        public ?array $images360 = null,
        public ?string $colorImage = null
    ) {}
}