<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

class OnlineStoreCountry extends Entity
{
    protected int $id;
    protected string $name;
    protected string $code;
    protected ?string $isoCode;
    protected ?string $flagCode;
    protected string $codeAlpha3;
    protected ?string $currency;
    protected ?string $language;
    protected ?int $regionCount;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
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

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): static
    {
        $this->code = $code;
        return $this;
    }

    public function getIsoCode(): ?string
    {
        return $this->isoCode;
    }

    public function setIsoCode(?string $isoCode): static
    {
        $this->isoCode = $isoCode;
        return $this;
    }

    public function getFlagCode(): ?string
    {
        return $this->flagCode;
    }

    public function setFlagCode(?string $flagCode): static
    {
        $this->flagCode = $flagCode;
        return $this;
    }

    public function getCodeAlpha3(): string
    {
        return $this->codeAlpha3;
    }

    public function setCodeAlpha3(string $codeAlpha3): static
    {
        $this->codeAlpha3 = $codeAlpha3;
        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(?string $currency): static
    {
        $this->currency = $currency;
        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(?string $language): static
    {
        $this->language = $language;
        return $this;
    }

    public function getRegionCount(): ?int
    {
        return $this->regionCount;
    }

    public function setRegionCount(?int $regionCount): static
    {
        $this->regionCount = $regionCount;
        return $this;
    }
}
