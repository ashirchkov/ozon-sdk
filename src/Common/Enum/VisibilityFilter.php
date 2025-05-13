<?php

namespace AlexeyShirchkov\Ozon\Common\Enum;

enum VisibilityFilter: string
{
    case All = 'ALL';
    case Visible = 'VISIBLE';
    case Invisible = 'INVISIBLE';
    case EmptyStock = 'EMPTY_STOCK';
    case NotModerated = 'NOT_MODERATED';
    case Moderated = 'MODERATED';
    case Disabled = 'DISABLED';
    case StateFailed = 'STATE_FAILED';
    case ReadyToSupply = 'READY_TO_SUPPLY';
    case ValidationStatePending = 'VALIDATION_STATE_PENDING';
    case ValidationStateFail = 'VALIDATION_STATE_FAIL';
    case ValidationStateSuccess = 'VALIDATION_STATE_SUCCESS';
    case ToSupply = 'TO_SUPPLY';
    case InSale = 'IN_SALE';
    case RemovedFromSale = 'REMOVED_FROM_SALE';
    case Overpriced = 'OVERPRICED';
    case CriticallyOverpriced = 'CRITICALLY_OVERPRICED';
    case EmptyBarcode = 'EMPTY_BARCODE';
    case BarcodeExists = 'BARCODE_EXISTS';
    case Quarantine = 'QUARANTINE';
    case Archived = 'ARCHIVED';
    case OverpricedWithStock = 'OVERPRICED_WITH_STOCK';
    case PartialApproved = 'PARTIAL_APPROVED';
}
