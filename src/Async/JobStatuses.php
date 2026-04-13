<?php

namespace Shoptet\Api\Sdk\Php\Async;

enum JobStatuses: string
{
    case PENDING = 'pending';
    case RUNNING = 'running';
    case COMPLETED = 'completed';
    case FAILED = 'failed';
    case KILLED = 'killed';

    /**
     * @return JobStatuses[]
     */
    public static function getWaitingStatuses(): array
    {
        return [
            self::PENDING,
            self::RUNNING,
        ];
    }

    /**
     * @return JobStatuses[]
     */
    public static function getFailedStatuses(): array
    {
        return [
            self::FAILED,
            self::KILLED,
        ];
    }
}
