<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopDesignResponse\GetEshopDesignResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class Layout extends Entity
{
    protected string $homepage;
    protected string $subPage;
    protected string $productDetail;

    public function getHomepage(): string
    {
        return $this->homepage;
    }

    public function setHomepage(string $homepage): static
    {
        $this->homepage = $homepage;
        return $this;
    }

    public function getSubPage(): string
    {
        return $this->subPage;
    }

    public function setSubPage(string $subPage): static
    {
        $this->subPage = $subPage;
        return $this;
    }

    public function getProductDetail(): string
    {
        return $this->productDetail;
    }

    public function setProductDetail(string $productDetail): static
    {
        $this->productDetail = $productDetail;
        return $this;
    }
}
