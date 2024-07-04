<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

enum Verdicts: string
{
    case PASS = 'PASS';
    case FAIL = 'FAIL';
    case GRAY = 'GRAY';
    case PROCESSING_FAILED = 'PROCESSING_FAILED';
}
