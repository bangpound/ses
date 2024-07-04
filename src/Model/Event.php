<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

readonly class Event
{
    public function __construct(
        public string            $eventType,
        public Mail              $mail,
        public ?Bounce           $bounce = null,
        public ?Complaint        $complaint = null,
        public ?Delivery         $delivery = null,
        public ?Send             $send = null,
        public ?Reject           $reject = null,
        public ?Open             $open = null,
        public ?Click            $click = null,
        public ?RenderingFailure $failure = null,
        public ?DeliveryDelay    $deliveryDelay = null,
        public ?Subscription     $subscription = null,
    ) {
    }
}
