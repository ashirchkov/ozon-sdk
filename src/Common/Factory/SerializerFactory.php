<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Factory;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\PropertyNormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\Serializer\Normalizer\BackedEnumNormalizer;

class SerializerFactory
{

    public static function createSymfonySerializer(): Serializer {

        $phpDocExtractor = new PhpDocExtractor();
        $reflectionExtractor = new ReflectionExtractor();

        $propertyTypeExtractor = new PropertyInfoExtractor(
            [$reflectionExtractor],
            [$phpDocExtractor, $reflectionExtractor],
            [$phpDocExtractor],
            [$reflectionExtractor]
        );

        $propertyNormalizer = new PropertyNormalizer(null, null, $propertyTypeExtractor);

        return new Serializer(
            [
                new DateTimeNormalizer(),
                new BackedEnumNormalizer(),
                $propertyNormalizer,
                new ArrayDenormalizer()
            ],
            [new JsonEncoder()]
        );

    }

}