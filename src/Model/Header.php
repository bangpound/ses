<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

readonly class Header
{
    public function __construct(
        public string $name,
        public string $value
    ) {
    }
}
