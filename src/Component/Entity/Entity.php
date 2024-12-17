<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use JsonSerializable;
use Shoptet\Api\Sdk\Php\Exception\InvalidArgumentException;
use Shoptet\Api\Sdk\Php\Exception\ReflectionException;
use Shoptet\Api\Sdk\Php\Factory\Entity\EntityFactory;

abstract class Entity implements JsonSerializable
{
    /**
     * @var array<string, mixed>
     */
    protected array $undefinedParams = [];

    /**
     * @param array<string, mixed> $data
     * @throws ReflectionException
     * @throws InvalidArgumentException
     */
    public function __construct(array $data = [])
    {
        if (count($data) !== 0) {
            EntityFactory::createEntity($this, $data);
        }
    }

    /**
     * @throws InvalidArgumentException
     */
    public function __set(string $name, mixed $value)
    {
        if (property_exists($this, $name)) {
            throw new InvalidArgumentException(sprintf('Property "%s" exists use setter method instead', $name));
        }
        $this->undefinedParams[$name] = $value;
    }

    /**
     * @throws InvalidArgumentException
     */
    public function __get(string $name): mixed
    {
        if (property_exists($this, $name)) {
            throw new InvalidArgumentException(sprintf('Property "%s" exists use getter method instead', $name));
        }
        if (!array_key_exists($name, $this->undefinedParams)) {
            throw new InvalidArgumentException(sprintf('Property "%s" does not exist', $name));
        }
        return $this->undefinedParams[$name];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        $result = [];

        $reflection = new \ReflectionClass($this);
        foreach ($reflection->getProperties() as $property) {
            if ($property->isInitialized($this)) {
                if ($property->getName() !== 'undefinedParams') {
                    $result[$property->getName()] = $property->getValue($this);
                } else {
                    /** @var array<string, mixed> $undefinedParams */
                    $undefinedParams = $property->getValue($this);
                    foreach ($undefinedParams as $undefinedParamKey => $undefinedParamValue) {
                        $result[$undefinedParamKey] = $undefinedParamValue;
                    }
                }
            }
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function jsonSerialize(): array
    {
        return $this->toArray();
    }
}
