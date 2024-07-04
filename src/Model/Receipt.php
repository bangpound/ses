<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

class Receipt
{
    public function __construct(
        public readonly Action $action,
        public readonly DkimVerdict $dkimVerdict,
        public readonly ?string $dmarcPolicy,
        public readonly int $processingTimeMillis,
        public readonly array $recipients,
        public readonly SpamVerdict $spamVerdict,
        public readonly SpfVerdict $spfVerdict,
        public readonly \DateTimeInterface $timestamp,
        public readonly VirusVerdict $virusVerdict
    ) {
    }
}
