<?php

namespace Shoptet\Api\Sdk\Php\Component\Entity;

use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeDateTimeNullable;
use Shoptet\Api\Sdk\Php\Component\ValueObject\TypeGuidUnlimited;

class DiscussionPost extends Entity
{
    protected int $id;
    protected ?int $parentId;
    protected ?TypeGuidUnlimited $productGuid;
    protected ?int $articleId;
    protected ?int $pageId;
    protected ?TypeGuidUnlimited $customerGuid;
    protected ?string $name;
    protected ?string $email;
    protected ?string $title;
    protected ?string $content;
    protected TypeDateTimeNullable $creationDate;
    protected bool $authorized;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;
        return $this;
    }

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(?int $parentId): static
    {
        $this->parentId = $parentId;
        return $this;
    }

    public function getProductGuid(): ?TypeGuidUnlimited
    {
        return $this->productGuid;
    }

    public function setProductGuid(?TypeGuidUnlimited $productGuid): static
    {
        $this->productGuid = $productGuid;
        return $this;
    }

    public function getArticleId(): ?int
    {
        return $this->articleId;
    }

    public function setArticleId(?int $articleId): static
    {
        $this->articleId = $articleId;
        return $this;
    }

    public function getPageId(): ?int
    {
        return $this->pageId;
    }

    public function setPageId(?int $pageId): static
    {
        $this->pageId = $pageId;
        return $this;
    }

    public function getCustomerGuid(): ?TypeGuidUnlimited
    {
        return $this->customerGuid;
    }

    public function setCustomerGuid(?TypeGuidUnlimited $customerGuid): static
    {
        $this->customerGuid = $customerGuid;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): static
    {
        $this->name = $name;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): static
    {
        $this->title = $title;
        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): static
    {
        $this->content = $content;
        return $this;
    }

    public function getCreationDate(): TypeDateTimeNullable
    {
        return $this->creationDate;
    }

    public function setCreationDate(TypeDateTimeNullable $creationDate): static
    {
        $this->creationDate = $creationDate;
        return $this;
    }

    public function isAuthorized(): bool
    {
        return $this->authorized;
    }

    public function setAuthorized(bool $authorized): static
    {
        $this->authorized = $authorized;
        return $this;
    }
}
