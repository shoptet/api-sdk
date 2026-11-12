<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\Entity\EetEvidenceUnit\Certificate;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidNullable;

class EetEvidenceUnit extends Entity
{
    protected int $id;
    protected int $unitId;
    protected string $name;
    protected string $type;
    protected bool $hasAssignedShape;
    protected TypeGuidNullable $salesChannelGuid;
    protected bool $isDefaultForManualDocuments;
    protected bool $isReady;
    protected bool $isActive;
    protected ?Certificate $certificate;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getUnitId(): int
    {
        return $this->unitId;
    }

    public function setUnitId(int $unitId): static
    {
        $this->unitId = $unitId;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function isHasAssignedShape(): bool
    {
        return $this->hasAssignedShape;
    }

    public function setHasAssignedShape(bool $hasAssignedShape): static
    {
        $this->hasAssignedShape = $hasAssignedShape;
        return $this;
    }

    public function getSalesChannelGuid(): TypeGuidNullable
    {
        return $this->salesChannelGuid;
    }

    public function setSalesChannelGuid(TypeGuidNullable $salesChannelGuid): static
    {
        $this->salesChannelGuid = $salesChannelGuid;
        return $this;
    }

    public function isIsDefaultForManualDocuments(): bool
    {
        return $this->isDefaultForManualDocuments;
    }

    public function setIsDefaultForManualDocuments(bool $isDefaultForManualDocuments): static
    {
        $this->isDefaultForManualDocuments = $isDefaultForManualDocuments;
        return $this;
    }

    public function isIsReady(): bool
    {
        return $this->isReady;
    }

    public function setIsReady(bool $isReady): static
    {
        $this->isReady = $isReady;
        return $this;
    }

    public function isIsActive(): bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): static
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function getCertificate(): ?Certificate
    {
        return $this->certificate;
    }

    public function setCertificate(?Certificate $certificate): static
    {
        $this->certificate = $certificate;
        return $this;
    }
}
