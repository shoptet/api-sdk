<?php

namespace Shoptet\Api\Sdk\Php\Exception;

use RuntimeException;

class RateLimitExceededException extends RuntimeException
{
    private ?string $retryAfter;

    public function __construct(string $message, ?string $retryAfter = null)
    {
        parent::__construct($message);
        $this->retryAfter = $retryAfter;
    }

    public function getRetryAfter(): ?string
    {
        return $this->retryAfter;
    }
}
