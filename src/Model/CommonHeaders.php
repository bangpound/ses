<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

use DateTimeInterface;

class CommonHeaders
{
    /**
     * @param array<string>      $to
     * @param array<string>|null $cc
     * @param array<string>|null $bcc
     * @param array<string>      $from
     * @param array<string>|null $replyTo
     */
    public function __construct(
        public readonly string $messageId,
        public readonly DateTimeInterface $date,
        public readonly array $to,
        public readonly ?array $cc,
        public readonly ?array $bcc,
        public readonly array $from,
        public readonly ?string $sender,
        public readonly ?string $returnPath,
        public readonly ?array $replyTo,
        public readonly string $subject
    ) {
    }
}
