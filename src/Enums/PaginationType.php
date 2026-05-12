<?php

declare(strict_types=1);

namespace Muku9812\FastApiCrud\Enums;

enum PaginationType: string
{
    case LengthAware = 'length-aware';
    case Simple = 'simple';
    case Cursor = 'cursor';
    case None = 'none';
}
