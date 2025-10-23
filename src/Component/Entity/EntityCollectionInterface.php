<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

/**
 * @template TValue
 */
interface EntityCollectionInterface
{
    /**
     * @param array<int, TValue> $data
     */
    public function __construct(array $data = []);
}
