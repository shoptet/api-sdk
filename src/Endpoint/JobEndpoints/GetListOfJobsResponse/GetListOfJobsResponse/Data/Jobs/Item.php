<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\JobEndpoints\GetListOfJobsResponse\GetListOfJobsResponse\Data\Jobs;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTime;

class Item extends Entity
{
    protected string $jobId;
    protected string $endpoint;
    protected TypeDateTime $creationTime;
    protected ?TypeDateTime $completionTime;
    protected string $status;
    protected ?TypeDateTime $validUntil;
    protected ?string $language;

    public function getJobId(): string
    {
        return $this->jobId;
    }

    public function setJobId(string $jobId): static
    {
        $this->jobId = $jobId;
        return $this;
    }

    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    public function setEndpoint(string $endpoint): static
    {
        $this->endpoint = $endpoint;
        return $this;
    }

    public function getCreationTime(): TypeDateTime
    {
        return $this->creationTime;
    }

    public function setCreationTime(TypeDateTime $creationTime): static
    {
        $this->creationTime = $creationTime;
        return $this;
    }

    public function getCompletionTime(): ?TypeDateTime
    {
        return $this->completionTime;
    }

    public function setCompletionTime(?TypeDateTime $completionTime): static
    {
        $this->completionTime = $completionTime;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;
        return $this;
    }

    public function getValidUntil(): ?TypeDateTime
    {
        return $this->validUntil;
    }

    public function setValidUntil(?TypeDateTime $validUntil): static
    {
        $this->validUntil = $validUntil;
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
}
