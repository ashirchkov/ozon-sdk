<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum PictureImportState: string
{
    case Imported = 'imported';
    case Uploaded = 'uploaded';
    case Pending = 'pending';
}