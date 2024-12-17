<?php

namespace Shoptet\Api\Sdk\Php\Factory\Entity;

use ReflectionClass;
use ReflectionException as CoreReflectionException;
use ReflectionMethod;
use ReflectionNamedType;
use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\Entity\EntityCollection;
use Shoptet\Api\Sdk\Php\Component\ValueObject\ValueObjectInterface;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\Sdk;

/**
 * @template TValue
 * @todo cleanup!
 * @todo This is more builder than factory. Rename?
 */
final class EntityFactory
{
    /**
     * @var ReflectionClass<Entity>
     */
    protected ReflectionClass $reflection;
    protected Entity $entity;

    /**
     * @param class-string<Entity>|Entity $entity
     * @param array<string, mixed> $data
     * @return Entity
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    public static function createEntity(string|Entity $entity, array $data): Entity
    {
        return (new self($entity))->processEntity($data);
    }

    /**
     * @param array<string, mixed> $data
     * @return Entity
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    public function processEntity(array $data): Entity
    {
        try {
            foreach ($data as $property => $value) {
                $this->processProperty($property, $value);
            }
        } catch (CoreReflectionException $e) {
            throw new ReflectionException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
        return $this->entity;
    }

    /**
     * @throws CoreReflectionException
     * @throws InvalidArgumentException
     */
    protected function processProperty(string $property, mixed $value): void
    {
        $setter = $this->getSetter($property);
        if ($setter === null) {
            //If Shoptet add new param to the endpoint this cannot stop working (lets process it by magic setter)
            Sdk::getLogger()->notice(
                sprintf(
                    'Property "%s" of "%s" has been set by magic setter. Please update the "Shoptet API SDK PHP" library.',
                    $property,
                    get_class($this->entity)
                )
            );
            $this->entity->{$property} = $value;
            return;
        }

        if ($value === null) {
            $this->processNullValueProperty($setter);
        } elseif (is_scalar($value)) {
            $this->processScalarValueProperty($setter, $value);
        } elseif (is_array($value)) {
            /** @var array<string, mixed> $value */
            $this->processArrayValueProperty($setter, $value);
        } else {
            throw new InvalidArgumentException(sprintf('Trying to process unsupported property type "%s".', gettype($value)));
        }
    }

    /**
     * @throws CoreReflectionException
     */
    protected function getSetter(string $property): ?ReflectionMethod
    {
        $method = 'set' . ucfirst($property);
        return $this->reflection->hasMethod($method) ? $this->reflection->getMethod($method) : null;
    }

    /**
     * @param ReflectionMethod $setter
     * @return void
     * @throws CoreReflectionException
     * @throws InvalidArgumentException
     */
    protected function processNullValueProperty(ReflectionMethod $setter): void
    {
        $parameterType = $this->getSingleParameterType($setter);

        if ($parameterType->allowsNull()) {
            $setter->invoke(
                $this->entity,
                null
            );
        } else {
            if (!$parameterType->isBuiltin()) {
                /** @var class-string $parameterTypeName */
                $parameterTypeName = $parameterType->getName();
                $setter->invoke(
                    $this->entity,
                    $this->processValueObjectProperty(
                        $parameterTypeName,
                        null
                    )
                );
            } else {
                //@todo To discussion - Often a silent error do we really want to throw this exception?
                throw new InvalidArgumentException('Trying to set value null to nun-nullable parameter');
            }
        }
    }

    /**
     * @param ReflectionMethod $setter
     * @param mixed $value
     * @return void
     * @throws CoreReflectionException
     */
    protected function processScalarValueProperty(ReflectionMethod $setter, mixed $value): void
    {
        $parameterType = $this->getSingleParameterType($setter);

        if ($parameterType->isBuiltin()) {
            $setter->invoke(
                $this->entity,
                $value
            );
        } else {
            /** @var class-string $parameterTypeName */
            $parameterTypeName = $parameterType->getName();
            $setter->invoke(
                $this->entity,
                $this->processValueObjectProperty(
                    $parameterTypeName,
                    $value
                )
            );
        }
    }

    /**
     * @param ReflectionMethod $setter
     * @param array<string, mixed> $value
     * @return void
     * @throws CoreReflectionException
     * @throws InvalidArgumentException
     */
    protected function processArrayValueProperty(ReflectionMethod $setter, array $value): void
    {
        $parameterType = $this->getSingleParameterType($setter);

        /** @var class-string<EntityCollection<TValue>>|class-string<Entity> $parameterTypeName */
        $parameterTypeName = $parameterType->getName();
        if (!class_exists($parameterTypeName)) {
            throw new InvalidArgumentException(sprintf('Class "%s" does not exist', $parameterTypeName));
        }
        $subEntityReflection = new ReflectionClass($parameterTypeName);

        if ($subEntityReflection->isSubclassOf(Entity::class)) {
            /** @var class-string<Entity> $parameterTypeName */
            $setter->invoke(
                $this->entity,
                $this->processEntityProperty(
                    $parameterTypeName,
                    $value
                )
            );
        } elseif ($subEntityReflection->isSubclassOf(EntityCollection::class)) {
            /** @var array<string, array<string, mixed>> $value */
            if (count($value) === 0) {
                return;
            }

            /** @var class-string<EntityCollection<TValue>> $parameterTypeName */
            $setter->invoke(
                $this->entity,
                $this->processEntityCollectionProperty(
                    $parameterTypeName,
                    $value
                )
            );
        } else {
            throw new InvalidArgumentException(sprintf('Trying to process unsupported structure type %s', $parameterType->getName()));
        }
    }

    /**
     * @param class-string $valueObjectClass
     * @return ReflectionClass<ValueObjectInterface>|null
     * @throws CoreReflectionException
     */
    protected function getValueObjectPropertyReflection(string $valueObjectClass): ?ReflectionClass
    {
        $valueObjectReflection = new ReflectionClass($valueObjectClass);
        if ($valueObjectReflection->implementsInterface(ValueObjectInterface::class)) {
            /** @var ReflectionClass<ValueObjectInterface> $valueObjectReflection */
            return $valueObjectReflection;
        }
        return null;
    }

    /**
     * @param class-string $valueObjectClass
     * @param mixed $value
     * @return ValueObjectInterface
     * @throws CoreReflectionException
     * @throws InvalidArgumentException
     */
    protected function processValueObjectProperty(string $valueObjectClass, mixed $value): ValueObjectInterface
    {
        $valueObjectReflection = $this->getValueObjectPropertyReflection($valueObjectClass);
        if ($valueObjectReflection === null) {
            throw new InvalidArgumentException(sprintf('Trying to process valueObjectProperty "%s" of non valueObject type', $valueObjectClass));
        }
        /** @var ReflectionMethod $constructor - All ValueObjects have constructor */
        $constructor = $valueObjectReflection->getConstructor();
        if ($value === null && !$this->getSingleParameterType($constructor)->allowsNull()) {
            throw new InvalidArgumentException(sprintf('Trying to set value null to nun-nullable parameter of ValueObject "%s"', $valueObjectReflection->getName()));
        }

        try {
            return $valueObjectReflection->newInstance($value);
        } catch (InvalidArgumentException $e) {
            throw new InvalidArgumentException(
                sprintf(
                    'Trying to set invalid value "%s" in ValueObject "%s"',
                    var_export($value, true),
                    $valueObjectReflection->getName()
                ),
                $e->getCode(),
                $e
            );
        }
    }

    /**
     * @param class-string<Entity> $entityClass
     * @param array<string, mixed> $value
     * @return Entity
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    protected function processEntityProperty(string $entityClass, array $value): Entity
    {
        return self::createEntity($entityClass, $value);
    }

    /**
     * @param class-string<EntityCollection<TValue>> $entityCollectionClass
     * @param non-empty-array<string, array<string, mixed>> $value
     * @return EntityCollection<mixed> @todo I don't understand why phpstan require mixed type to be here and not the TValue?
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    protected function processEntityCollectionProperty(string $entityCollectionClass, array $value): EntityCollection
    {
        return EntityCollectionFactory::createEntityCollection($entityCollectionClass, $value);
    }

    /**
     * @throws InvalidArgumentException
     */
    protected function getSingleParameterType(ReflectionMethod $method): ReflectionNamedType
    {
        $parameters = $method->getParameters();
        if (count($parameters) === 0) {
            throw new InvalidArgumentException(sprintf('Trying to get single parameter from non-parametric method "%s"', $method->getName()));
        }

        $parameter = current($parameters);
        $type = $parameter->getType();
        if ($type instanceof ReflectionNamedType) {
            return $type;
        } else {
            throw new InvalidArgumentException(sprintf('Unsupported parameter type "%s"', $parameter->getName()));
        }
    }

    /**
     * @param class-string<Entity>|Entity $entity
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    protected function __construct(string|Entity $entity)
    {
        try {
            $this->reflection = new ReflectionClass($entity);

            if (!$this->reflection->isSubclassOf(Entity::class)) {
                throw new InvalidArgumentException(
                    sprintf(
                        'Class "%s" is not subclass of "%s"',
                        $entity instanceof Entity ? get_class($entity) : $entity,
                        Entity::class
                    )
                );
            }

            $this->entity = $entity instanceof Entity ? $entity : $this->reflection->newInstance();
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
