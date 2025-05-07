<?php

declare(strict_types=1);

namespace AlexeyShirchkov\Ozon\Common\Enum;

enum HttpMethod: string
{

    case Post = 'POST';

    case Get = 'GET';

    case Put = 'PUT';

    case Delete = 'DELETE';

    case Head = 'HEAD';

    case Connect = 'CONNECT';

    case Options = 'OPTIONS';

    case Trace = 'TRACE';

    case Patch = 'PATCH';


}