<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

readonly class Action
{
    /**
     * @param string $type The type of action that was executed. Possible values are S3, SNS, Bounce, Lambda, Stop, and WorkMail.
     */
    public function __construct(
        public string  $type,
        public ?string $topicArn = null,
        public ?string $encoding = null,
        public ?string $bucketName = null,
        public ?string $objectKey = null,
        public ?string $objectKeyPrefix = null,
        public ?string $smtpReplyCode = null,
        public ?string $statusCode = null,
        public ?string $message = null,
        public ?string $sender = null,
        public ?string $functionArn = null,
        public ?string $invocationType = null,
        public ?string $organizationArn = null
    ) {
    }
}
