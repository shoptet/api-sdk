<?php

namespace ShoptetTests\Unit\Factory;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class DummyEntity extends Entity
{
    protected string $nonExistSetter;
    protected ?string $nullableString = null;
    protected string $string;
    protected int $int;
    protected DummySubEntity $subEntity;

    public function getString(): string
    {
        return $this->string;
    }

    public function getNonExistSetter(): string
    {
        return $this->nonExistSetter;
    }

    public function setString(string $string): void
    {
        $this->string = $string;
    }

    public function getNullableString(): ?string
    {
        return $this->nullableString;
    }

    public function setNullableString(?string $nullableString): void
    {
        $this->nullableString = $nullableString;
    }

    public function getInt(): int
    {
        return $this->int;
    }

    public function setInt(int $int): void
    {
        $this->int = $int;
    }

    public function getSubEntity(): DummySubEntity
    {
        return $this->subEntity;
    }

    public function setSubEntity(DummySubEntity $subEntity): void
    {
        $this->subEntity = $subEntity;
    }
}
