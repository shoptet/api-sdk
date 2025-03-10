<?php

namespace Shoptet\Api\Sdk\Php\Async;

use Closure;
use Generator;
use IteratorAggregate;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetJobDetailResponse\GetJobDetailResponse;
use Shoptet\Api\Sdk\Php\Exception\LogicException;

/**
 * Iterator over snapshot job result data.
 *
 * @implements IteratorAggregate<int, Entity>
 */
class SnapshotResultData implements IteratorAggregate
{
    /** @var Closure(): Generator<int, Entity> */
    private Closure $generator;

    public function __construct(
        private readonly GetJobDetailResponse $response
    ) {
    }

    public function getOriginResponse(): GetJobDetailResponse
    {
        return $this->response;
    }

    /** @param Closure(): Generator<int, Entity> $generator */
    public function setResultDataGenerator(Closure $generator): void
    {
        $this->generator = $generator;
    }

    public function hasResultData(): bool
    {
        return isset($this->generator);
    }

    public function getIterator(): Generator
    {
        if (!$this->hasResultData()) {
            throw new LogicException('Result data generator is not set!');
        }

        yield from ($this->generator)();
    }
}
