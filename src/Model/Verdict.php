<?php

declare(strict_types=1);

namespace Bangpound\Ses\Model;

abstract class Verdict
{
    /**
     * Constructor method for the class.
     *
     * @param Verdicts $status the status value to assign
     *
     * @return void
     *
     * @todo Use an enum instead of string. Symfony Serializer tries to instantiate an enum.
     */
    public function __construct(public readonly Verdicts $status)
    {
    }
}
