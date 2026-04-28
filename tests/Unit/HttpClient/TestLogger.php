<?php

namespace ShoptetTests\Unit\HttpClient;

use Psr\Log\AbstractLogger;
use Psr\Log\LoggerInterface;

class TestLogger extends AbstractLogger implements LoggerInterface
{
    /** @var array<int, array{level: mixed, message: string, context: array<string, mixed>}> */
    public array $records = [];

    /** @param array<string, mixed> $context */
    public function log($level, string|\Stringable $message, array $context = []): void
    {
        $this->records[] = ['level' => $level, 'message' => (string) $message, 'context' => $context];
    }
}
