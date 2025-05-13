<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V4\Model\Product;

use AlexeyShirchkov\Ozon\Common\Enum\WeightUnit;
use AlexeyShirchkov\Ozon\Common\Enum\DimensionUnit;
use AlexeyShirchkov\Ozon\Common\Model\ProductAttribute;

readonly class InfoAttributesProduct
{
    /**
     * @param int|null $id
     * @param string|null $offer_id
     * @param int|null $sku
     * @param int|null $type_id
     * @param int|null $height
     * @param int|null $depth
     * @param int|null $width
     * @param DimensionUnit|null $dimension_unit
     * @param int|null $weight
     * @param WeightUnit|null $weight_unit
     * @param string|null $name
     * @param string|null $color_image
     * @param int|null $description_category_id
     * @param InfoAttributesProductModelInfo|null $model_info
     * @param string|null $primary_image
     * @param string[]|null $images
     * @param InfoAttributesProductPdfList[]|null $pdf_list
     * @param ProductAttribute[]|null $attributes
     * @param ProductAttribute[]|null $complex_attributes
     * @param string|null $barcode
     * @param string[]|null $barcodes
     */
    public function __construct(
        public ?int $id = null,
        public ?string $offer_id = null,
        public ?int $sku = null,
        public ?int $type_id = null,
        public ?int $height = null,
        public ?int $depth = null,
        public ?int $width = null,
        public ?DimensionUnit $dimension_unit = null,
        public ?int $weight = null,
        public ?WeightUnit $weight_unit = null,
        public ?string $name = null,
        public ?string $color_image = null,
        public ?int $description_category_id = null,
        public ?InfoAttributesProductModelInfo $model_info = null,
        public ?string $primary_image = null,
        public ?array $images = null,
        public ?array $pdf_list = null,
        public ?array $attributes = null,
        public ?array $complex_attributes = null,
        public ?string $barcode = null,
        public ?array $barcodes = null
    ) {}
}