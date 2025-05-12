<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V3\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\Currency;
use AlexeyShirchkov\Ozon\Common\Enum\WeightUnit;
use AlexeyShirchkov\Ozon\Common\Enum\DimensionUnit;
use AlexeyShirchkov\Ozon\Common\Model\AbstractModel;
use AlexeyShirchkov\Ozon\Seller\V3\Enum\ProductServiceType;

readonly class Product extends AbstractModel
{
    /**
     * @param int $description_category_id Идентификатор категории
     * @param int|null $type_id Идентификатор типа товара
     * @param ProductServiceType|null $service_type ???
     * @param string|null $offer_id Идентификатор товара в системе продавца — артикул
     * @param string|null $barcode Штрихкод товара
     * @param string|null $name Название товара
     * @param string|null $price Цена товара с учётом скидок. Отображается на карточке товара
     * @param string|null $old_price Цена до скидок (будет зачёркнута на карточке товара). Указывается в рублях. Разделитель дробной части — точка, до двух знаков после точки
     * @param int|null $new_description_category_id Новый идентификатор категории
     * @param string|null $color_image Маркетинговый цвет
     * @param Attribute[] $attributes Массив с характеристиками товара
     * @param ComplexAttributes|null $complex_attributes Массив характеристик, у которых есть вложенные атрибуты
     * @param Currency|null $currency_code Валюта ваших цен
     * @param int|null $depth Глубина упаковки
     * @param DimensionUnit|null $dimension_unit Единица измерения габаритов
     * @param int|null $weight Вес товара в упаковке
     * @param WeightUnit|null $weight_unit Единица измерения веса
     * @param int|null $width Ширина упаковки
     * @param int|null $height Высота упаковки
     * @param string[]|null $images Массив изображений. До 15 штук. Изображения показываются на сайте в таком же порядке, как в массиве
     * @param string[]|null $images360 Массив изображений 360. До 70 штук
     * @param PdfFile[]|null $pdf_list Список PDF-файлов
     * @param string|null $primary_image Ссылка на главное изображение товара
     * @param string|null $vat Ставка НДС для товара: 0 — не облагается НДС, 0.05 — 5%, 0.07 — 7%, 0.1 — 10%, 0.2 — 20%.
     * @param string[]|null $geo_names Геоограничения
     */
    protected function __construct(
        public int $description_category_id,
        public ?int $type_id = null,
        public ?ProductServiceType $service_type = null,
        public ?string $offer_id = null,
        public ?string $barcode = null,
        public ?string $name = null,
        public ?string $price = null,
        public ?string $old_price = null,
        public ?int $new_description_category_id = null,
        public ?string $color_image = null,
        public ?array $attributes = null,
        public ?ComplexAttributes $complex_attributes = null,
        public ?Currency $currency_code = null,
        public ?int $depth = null,
        public ?DimensionUnit $dimension_unit = null,
        public ?int $weight = null,
        public ?WeightUnit $weight_unit = null,
        public ?int $width = null,
        public ?int $height = null,
        public ?array $images = null,
        public ?array $images360 = null,
        public ?array $pdf_list = null,
        public ?string $primary_image = null,
        public ?string $vat = null,
        public ?array $geo_names = null,
    ) {}

}