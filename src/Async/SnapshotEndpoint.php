<?php

namespace Shoptet\Api\Sdk\Php\Async;

/**
 * Interface defines asynchronous endpoints, which is used to retrieve snapshot results
 */
interface SnapshotEndpoint extends AsyncEndpoint
{
    public function getSnapshotResultEntityClass(): string;
}
