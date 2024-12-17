<?php

namespace Shoptet\Api\Sdk\Php\Factory\Entity;

use ReflectionClass;
use ReflectionException as CoreReflectionException;
use ReflectionMethod;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;

/**
 * @template TValue
 * @todo cleanup!
 * @todo This is more builder than factory. Rename?
 */
final class EntityCollectionFactory
{
    /**
     * @var ReflectionClass<EntityCollection<TValue>>
     */
    protected ReflectionClass $reflection;

    /**
     * @var EntityCollection<TValue>
     */
    protected EntityCollection $entityCollection;

    /**
     * @param class-string<EntityCollection<TValue>>|EntityCollection<TValue> $entityCollection
     * @param non-empty-array<string, array<string, mixed>> $data
     * @return EntityCollection<TValue>
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    public static function createEntityCollection(string|EntityCollection $entityCollection, array $data): EntityCollection
    {
        return (new self($entityCollection))->processEntityCollection($data);
    }

    /**
     * @param non-empty-array<string, array<string, mixed>> $data
     * @return EntityCollection<TValue>
     * @throws ReflectionException
     */
    public function processEntityCollection(array $data): EntityCollection
    {
        try {
            $addMethod = $this->reflection->getMethod('add');
            $itemType = $this->getItemType(current($data));

            if (!class_exists($itemType)) {
                $this->processScalarItems($addMethod, $data);
            } else {
                $this->processEntityItems($addMethod, $data, new ReflectionClass($itemType));
            }
        } catch (CoreReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }

        return $this->entityCollection;
    }

    /**
     * @param array<string, array<string, mixed>> $data
     * @throws CoreReflectionException
     */
    protected function processScalarItems(ReflectionMethod $setter, array $data): void
    {
        foreach ($data as $item) {
            $setter->invoke(
                $this->entityCollection,
                $item
            );
        }
    }

    /**
     * @param array<string, array<string, mixed>> $data
     * @param ReflectionClass<Entity>|ReflectionClass<EntityCollection<TValue>>|ReflectionClass<object> $coreItemEntityReflection
     * @throws CoreReflectionException
     * @throws InvalidArgumentException
     */
    protected function processEntityItems(ReflectionMethod $setter, array $data, ReflectionClass $coreItemEntityReflection): void
    {
        if ($coreItemEntityReflection->isSubclassOf(Entity::class)) {
            foreach ($data as $item) {
                /** @var class-string<Entity> $itemTypeName */
                $itemTypeName = $this->getItemType($item);
                $setter->invoke(
                    $this->entityCollection,
                    EntityFactory::createEntity(
                        $itemTypeName,
                        $item
                    )
                );
            }
        } elseif ($coreItemEntityReflection->isSubclassOf(EntityCollection::class)) {
            /** @var array<string, array<string, array<string, mixed>>> $data */
            foreach ($data as $item) {
                if (count($item) === 0) {
                    continue;
                }

                /** @var class-string<EntityCollection<TValue>> $itemTypeName */
                $itemTypeName = $coreItemEntityReflection->getName();
                $setter->invoke(
                    $this->entityCollection,
                    EntityCollectionFactory::createEntityCollection(
                        $itemTypeName,
                        $item
                    )
                );
            }
        } else {
            throw new InvalidArgumentException(sprintf('Processing of items type "%s" is not supported.', $coreItemEntityReflection->getName()));
        }
    }

    /**
     * @param array<string, mixed> $itemData
     * @return class-string<Entity|EntityCollection>|string
     */
    protected function getItemType(array $itemData): string
    {
        return $this->entityCollection->getItemType($itemData);
    }

    /**
     * @param class-string<EntityCollection<TValue>>|EntityCollection<TValue> $entityCollection
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    protected function __construct(string|EntityCollection $entityCollection)
    {
        try {
            $this->reflection = new ReflectionClass($entityCollection);
            if (!$this->reflection->isSubclassOf(EntityCollection::class)) {
                throw new InvalidArgumentException(
                    sprintf(
                        'Class "%s" is not subclass of "%s"',
                        $entityCollection instanceof EntityCollection ? get_class($entityCollection) : $entityCollection,
                        EntityCollection::class
                    )
                );
            }
            $this->entityCollection = $entityCollection instanceof EntityCollection ? $entityCollection : $this->reflection->newInstance();
        } catch (CoreReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
    }

    private function __clone()
    {
    }
}
