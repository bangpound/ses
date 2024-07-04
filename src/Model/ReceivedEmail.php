<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

readonly class ReceivedEmail
{
    public function __construct(
        public string  $notificationType,
        public Receipt $receipt,
        public Mail    $mail,
        public ?string $content
    ) {
    }
}
