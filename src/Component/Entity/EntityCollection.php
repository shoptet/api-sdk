<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Traversable;

/**
 * @template TValue
 * @implements ArrayAccess<int, TValue>
 * @implements IteratorAggregate<int, TValue>
 * @implements EntityCollectionInterface<TValue>
 */
abstract class EntityCollection implements EntityCollectionInterface, ArrayAccess, IteratorAggregate, Countable
{
    /**
     * @var array<int, TValue>
     */
    protected array $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @param array<string, mixed> $data
     * @return class-string<TValue>|string
     * @throws InvalidArgumentException
     */
    abstract public function getItemType(array $data): string;

    /**
     * @return array<int, TValue>
     */
    public function toArray(): array
    {
        return $this->data;
    }

    /**
     * @param int $key
     * @param TValue $item
     * @return void
     */
    public function set(int $key, mixed $item): void
    {
        $this->data[$key] = $item;
    }

    /**
     * @param int $key
     * @return TValue|null
     */
    public function get(int $key): mixed
    {
        return $this->data[$key] ?? null;
    }

    /**
     * @param TValue $item
     * @return void
     */
    public function add(mixed $item): void
    {
        $this->data[] = $item;
    }

    /**
     * @param int $key
     * @return null|TValue
     */
    public function remove(int $key): mixed
    {
        if (!array_key_exists($key, $this->data)) {
            return null;
        }

        $removedItem = $this->data[$key];
        unset($this->data[$key]);

        return $removedItem;
    }

    /**
     * @param TValue $item
     * @param bool $strict
     * @return bool
     */
    public function removeItem(mixed $item, bool $strict = true): bool
    {
        $key = array_search($item, $this->data, $strict);

        if ($key !== false) {
            unset($this->data[$key]);
            return true;
        }

        return false;
    }

    public function clear(): void
    {
        $this->data = [];
    }

    /**
     * @param TValue $item
     * @param bool $strict
     * @return bool
     */
    public function contains(mixed $item, bool $strict = true): bool
    {
        return in_array($item, $this->data, $strict);
    }

    public function containsKey(int $key): bool
    {
        return array_key_exists($key, $this->data);
    }

    public function isEmpty(): bool
    {
        return empty($this->data);
    }

    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->data);
    }

    /**
     * @param int $offset
     * @return bool
     */
    public function offsetExists(mixed $offset): bool
    {
        return $this->containsKey($offset);
    }

    /**
     * @param int $offset
     * @return mixed
     */
    public function offsetGet(mixed $offset): mixed
    {
        return $this->get($offset);
    }

    /**
     * @param int|null $offset
     * @param TValue $value
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (!isset($offset)) {
            $this->add($value);
            return;
        }

        $this->set($offset, $value);
    }

    /**
     * @param int $offset
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        $this->remove($offset);
    }

    public function count(): int
    {
        return count($this->data);
    }

    /**
     * @return int[]
     */
    public function getKeys(): array
    {
        return array_keys($this->data);
    }

    /**
     * @return array<int, TValue>
     */
    public function getValues(): array
    {
        return array_values($this->data);
    }

    /**
     * @param (callable(TValue): bool)|null $callback
     * @return static
     */
    public function filter(?callable $callback): static
    {
        return new static(array_filter($this->data, $callback));
    }

    /**
     * @param callable(TValue): TValue $callback
     * @return static
     */
    public function map(callable $callback): static
    {
        return new static(array_map($callback, $this->data));
    }
}
