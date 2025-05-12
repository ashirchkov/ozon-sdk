<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Seller\V1\Enum;

enum ProductImportTaskStatus: string
{
    case Pending = 'pending';
    case Imported = 'imported';
    case Failed = 'failed';
    case Skipped = 'skipped';
}