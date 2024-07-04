<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

class Mail
{
    /**
     * @param string[] $destination
     * @param Header[] $headers
     */
    public function __construct(
        public readonly array $destination,
        public readonly string $messageId,
        public readonly string $source,
        public readonly \DateTimeInterface $timestamp,
        public readonly array $headers,
        public readonly CommonHeaders $commonHeaders,
        public readonly bool $headersTruncated
    ) {
    }
}
