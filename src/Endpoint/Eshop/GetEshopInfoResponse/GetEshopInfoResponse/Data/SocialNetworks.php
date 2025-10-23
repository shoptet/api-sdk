<?php

namespace Shoptet\Api\Sdk\Php\Endpoint\Eshop\GetEshopInfoResponse\GetEshopInfoResponse\Data;

use Shoptet\Api\Sdk\Php\Component\Entity\Entity;

class SocialNetworks extends Entity
{
    protected ?string $facebookUrl;
    protected ?string $facebookText;
    protected ?string $twitterAccount;
    protected ?string $instagramAccount;

    public function getFacebookUrl(): ?string
    {
        return $this->facebookUrl;
    }

    public function setFacebookUrl(?string $facebookUrl): static
    {
        $this->facebookUrl = $facebookUrl;
        return $this;
    }

    public function getFacebookText(): ?string
    {
        return $this->facebookText;
    }

    public function setFacebookText(?string $facebookText): static
    {
        $this->facebookText = $facebookText;
        return $this;
    }

    public function getTwitterAccount(): ?string
    {
        return $this->twitterAccount;
    }

    public function setTwitterAccount(?string $twitterAccount): static
    {
        $this->twitterAccount = $twitterAccount;
        return $this;
    }

    public function getInstagramAccount(): ?string
    {
        return $this->instagramAccount;
    }

    public function setInstagramAccount(?string $instagramAccount): static
    {
        $this->instagramAccount = $instagramAccount;
        return $this;
    }
}
